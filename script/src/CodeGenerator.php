<?php declare(strict_types=1);

namespace Vin\Script;

use Laminas\Code\Generator\ClassGenerator;
use Laminas\Code\Generator\DocBlockGenerator;
use Laminas\Code\Generator\PropertyGenerator;
use Laminas\Code\Reflection\ClassReflection;
use Laminas\Code\Reflection\PropertyReflection;
use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\EntityCollection;
use Vin\ShopwareSdk\Data\Entity\EntityDefinition;
use Vin\ShopwareSdk\Data\Schema\Property;
use Vin\ShopwareSdk\Data\Schema\PropertyCollection;
use Vin\ShopwareSdk\Data\Schema\SchemaCollection;
use Vin\ShopwareSdk\Data\Utils\StringFormatter;
use Vin\ShopwareSdk\Service\InfoService;

class CodeGenerator
{
    public string $dummyProperty;
    private static array $definitionMapping = [];

    public static function refreshSchema(InfoService $infoService, string $outputResourceDir)
    {
        if (!is_dir(__DIR__ . $outputResourceDir)) {
            throw new \InvalidArgumentException('Output paths not found');
        }

        $schema = $infoService->fetchRawSchema();

        \file_put_contents(__DIR__ . $outputResourceDir . "schema.json", json_encode($schema->getContents()));

        return $infoService->parseSchema($schema->getContents());
    }

    public static function generateResourcesFromSchema(SchemaCollection $schemaCollection, string $outputEntityDir, string $entityNamespace, string $resourcePath): void
    {
        foreach ($schemaCollection->getElements() as $entity) {
            $entityName = StringFormatter::pascalCase($entity->entity);
            $folderPath = sprintf(__DIR__ . $outputEntityDir . "%s", $entityName);
            $entityPath = sprintf("%s/%sEntity.php", $folderPath, $entityName);

            if (is_dir(sprintf(__DIR__ . $outputEntityDir . "%s", $entityName)) && file_exists($entityPath)) {
                continue;
            }

            @mkdir($folderPath);

            file_put_contents($entityPath, static::generateEntityClass($entityNamespace, $entityName, $entity->properties));
            file_put_contents(sprintf("%s/%sCollection.php", $folderPath, $entityName), static::generateCollectionClass($entityNamespace, $entityName));
            file_put_contents(sprintf("%s/%sDefinition.php", $folderPath, $entityName), static::generateDefinitionClass($entityNamespace, $entityName, $entity->entity));
            file_put_contents(__DIR__ . $resourcePath . "entity-mapping.json", json_encode(static::$definitionMapping));
        }
    }

    private static function generateEntityClass(string $entityNamespace, string $entityName, PropertyCollection $propertyCollection): string
    {
        $properties = [];

        $rp = new PropertyReflection(CodeGenerator::class, 'dummyProperty');

        $foo = ClassGenerator::fromReflection(new ClassReflection(DummyEntityClass::class));
        $entityClass = ClassGenerator::fromReflection(new ClassReflection(Entity::class));
        $preservedProperties = array_keys($entityClass->getProperties());

        /** @var Property $property */
        foreach ($propertyCollection as $property) {
            if (in_array($property->name, $preservedProperties)) {
                continue;
            }
            $type = self::getTypedProperty($entityNamespace, $entityName, $foo, $property);
            $dummyProperty = TypedPropertyGenerator::fromReflection($rp);
            $dummyProperty->setName($property->name);

            if ($type) {
                $dummyProperty->setType($type);
            }
            $dummyProperty->setVisibility(PropertyGenerator::FLAG_PUBLIC);
            $properties[] = $dummyProperty;
        }

        $docblock = DocBlockGenerator::fromArray([
            'shortDescription' => 'Shopware Entity Mapping Class',
            'longDescription' => 'This class is generated dynamically following SW entities schema',
        ]);

        $foo->setName($entityName . 'Entity')
            ->setNamespaceName($entityNamespace . "\\". $entityName)
            ->setDocblock($docblock)
            ->addProperties($properties);
        $foo->addUse(Entity::class);

        return '<?php declare(strict_types=1);' . PHP_EOL . $foo->generate();
    }

    private static function generateCollectionClass(string $entityNamespace, string $entityName): string
    {
        $foo = ClassGenerator::fromReflection(new ClassReflection(DummyCollectionClass::class));
        $docblock = DocBlockGenerator::fromArray([
            'shortDescription' => 'Shopware Collection Mapping Class',
            'longDescription' => 'This class is generated dynamically following SW entities schema',
        ]);

        $foo->setName($entityName . 'Collection')
            ->setNamespaceName($entityNamespace . "\\" . $entityName)
            ->setDocblock($docblock);

        $foo->addUse(EntityCollection::class);
        $foo->getMethod('getExpectedClass')->setBody('return ' . $entityName . 'Entity::class;');

        return '<?php declare(strict_types=1);' . PHP_EOL . $foo->generate();
    }

    private static function generateDefinitionClass(string $entityNamespace, string $entityName, string $entity): string
    {
        $foo = ClassGenerator::fromReflection(new ClassReflection(DummyDefinitionClass::class));
        $docblock = DocBlockGenerator::fromArray([
            'shortDescription' => 'Shopware Definition Mapping Class',
            'longDescription' => 'This class is generated dynamically following SW entities schema',
        ]);

        $foo->setName($entityName . 'Definition')
            ->setNamespaceName($entityNamespace . "\\" . $entityName)
            ->setDocblock($docblock);
        $foo->addUse(EntityDefinition::class);

//        $foo->addUse('Vin\ShopwareSdk\Data\Entity\\' . $entityName . '\\' . $entityName . 'Entity');
//        $foo->addUse('Vin\ShopwareSdk\Data\Entity\\' . $entityName . '\\' . $entityName . 'Collection');

        $foo->getMethod('getEntityClass')->setBody('return ' . $entityName . 'Entity::class;');
        $foo->getMethod('getEntityCollection')->setBody('return ' . $entityName . 'Collection::class;');

        $foo->getConstant('ENTITY_NAME')->setDefaultValue($entity);

        static::$definitionMapping[$entity] = $foo->getNamespaceName() . "\\" . $entityName . 'Definition';

        return '<?php declare(strict_types=1);' . PHP_EOL . $foo->generate();
    }

    private static function getTypedProperty(string $entityNamespace, string $entityName, ClassGenerator $class, Property $property): ?string
    {
        $prefix = '?';

//        $flags = $property->flags;
//        if ($flags->has('required') && $flags->get('required')->value) {
//            $prefix = '';
//        }

        if ($property->isStringField()) {
            return $prefix . 'string';
        }

        if ($property->isToManyAssociation()) {
            $ref = StringFormatter::pascalCase($property->entity);
            if ($ref !== $entityName) {
                $class->addUse(sprintf('%s\%s\%s%s', $entityNamespace, $ref, $ref, 'Collection'));
            }

            $refClass = $ref . 'Collection';

            return $prefix . $refClass;
        }

        if ($property->isToOneAssociation()) {
            $ref = StringFormatter::pascalCase($property->entity);
            if ($ref !== $entityName) {
                $class->addUse(sprintf('%s\%s\%s%s', $entityNamespace, $ref, $ref, 'Entity'));
            }

            $refClass = $ref . 'Entity';

            return $prefix . $refClass;
        }

        if ($property->type === 'int') {
            return $prefix . 'int';
        }

        if ($property->type === 'float') {
            return $prefix . 'float';
        }

        if ($property->type === 'boolean' || $property->type === 'bool') {
            return $prefix . 'bool';
        }

        if ($property->type === 'date') {
            return $prefix . \DateTimeInterface::class;
        }

        if ($property->isJsonField()) {
            return $prefix . 'array';
        }
        
        return null;
    }
}
