<?php declare(strict_types=1);

namespace Vin\Script;

use Laminas\Code\Generator\ClassGenerator;
use Laminas\Code\Generator\DocBlock\Tag\MethodTag;
use Laminas\Code\Generator\DocBlockGenerator;
use Laminas\Code\Generator\PropertyGenerator;
use Laminas\Code\Reflection\ClassReflection;
use Laminas\Code\Reflection\PropertyReflection;
use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\EntityCollection;
use Vin\ShopwareSdk\Data\Entity\EntityDefinition;
use Vin\ShopwareSdk\Data\Schema\Flag;
use Vin\ShopwareSdk\Data\Schema\FlagCollection;
use Vin\ShopwareSdk\Data\Schema\Property;
use Vin\ShopwareSdk\Data\Schema\PropertyCollection;
use Vin\ShopwareSdk\Data\Schema\Schema;
use Vin\ShopwareSdk\Data\Schema\SchemaCollection;
use Vin\ShopwareSdk\Data\Utils\StringFormatter;
use Vin\ShopwareSdk\Service\InfoService;

class CodeGenerator
{
    public string $dummyProperty;
    private static array $definitionMapping = [];
    public static ?SchemaCollection $schemaCollection = null;

    public static function refreshSchema(InfoService $infoService, string $outputResourceDir)
    {
        if (self::$schemaCollection) {
            return self::$schemaCollection;
        }

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
                static::$definitionMapping[$entity->entity] = $entityNamespace . "\\" . $entityName . "\\" . $entityName . 'Definition';

                continue;
            }

            @mkdir($folderPath);

            file_put_contents($entityPath, static::generateEntityClass($entityNamespace, $entityName, $entity->properties));
            file_put_contents(sprintf("%s/%sCollection.php", $folderPath, $entityName), static::generateCollectionClass($entityNamespace, $entityName));

            $definitionString = static::generateDefinitionClass($entityNamespace, $entityName, $entity);
            $definitionString = str_replace(" \\Schema", " Schema", $definitionString);
            file_put_contents(sprintf("%s/%sDefinition.php", $folderPath, $entityName), $definitionString);
        }

        file_put_contents(__DIR__ . $resourcePath . "entity-mapping.json", json_encode(static::$definitionMapping, JSON_PRETTY_PRINT));
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
            } else {
                $dummyProperty->setDocBlock('@var mixed');
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

        $entityClass = $entityName . 'Entity';

        $docblock->setTags([
            new MethodTag(null, 'void', sprintf('add(%s $%s)', $entityClass, 'entity')),
            new MethodTag(null, 'void', sprintf('set(%s $%s)', $entityClass, 'entity')),
            new MethodTag('getIterator', $entityClass . '[]'),
            new MethodTag('getElements', $entityClass . '[]'),
            new MethodTag(null, $entityClass . '|null', 'get(string $key)'),
            new MethodTag('first', $entityClass . '|null'),
            new MethodTag('last', $entityClass . '|null'),
        ]);

        $foo->setName($entityName . 'Collection')
            ->setNamespaceName($entityNamespace . "\\" . $entityName)
            ->setDocblock($docblock);

        $foo->addUse(EntityCollection::class);
        $foo->getMethod('getExpectedClass')->setBody('return ' . $entityClass . '::class;');

        return '<?php declare(strict_types=1);' . PHP_EOL . $foo->generate();
    }

    private static function generateDefinitionClass(string $entityNamespace, string $entityName, Schema $schema): string
    {
        $entity = $schema->entity;
        $foo = ClassGenerator::fromReflection(new ClassReflection(DummyDefinitionClass::class));
        $docblock = DocBlockGenerator::fromArray([
            'shortDescription' => 'Shopware Definition Mapping Class',
            'longDescription' => 'This class is generated dynamically following SW entities schema',
        ]);

        $foo->setName($entityName . 'Definition')
            ->setNamespaceName($entityNamespace . "\\" . $entityName)
            ->setDocblock($docblock);
        $foo->addUse(EntityDefinition::class);
        $foo->addUse(PropertyCollection::class);
        $foo->addUse(FlagCollection::class);
        $foo->addUse(Property::class);
        $foo->addUse(Flag::class);
        $foo->addUse(Schema::class);

        $foo->getMethod('getEntityClass')->setBody('return ' . $entityName . 'Entity::class;');
        $foo->getMethod('getEntityCollection')->setBody('return ' . $entityName . 'Collection::class;');

        $propertiesString = ClassGenerator::LINE_FEED;

        foreach ($schema->properties as $keyProperty => $property) {
            $flags = $property->flags ?? [];

            $flagCollectionString = 'new FlagCollection([%s])';

            $flagCollectionArgs = '';

            foreach ($flags as $flag) {
                $keyFlag = $flag->flag;
                $valueFlag = $flag->value;

                if (is_string($valueFlag)) {
                    $valueFlag = "'$valueFlag'";
                } elseif (is_array($valueFlag)) {
                    if ($keyFlag === 'read_protected' || $keyFlag === 'write_protected') {
                        $valueFlag = array_map(function ($item) { return "'$item'"; }, array_merge(...$valueFlag));
                        $valueFlag = "[[" . implode(", ", $valueFlag) . "]]";
                    } else {
                        $valueFlag = serialize($valueFlag);

                        $valueFlag = "unserialize('$valueFlag')";

                    }
                }

                $flagCollectionArgs .= "new Flag('$keyFlag', $valueFlag), ";
            }

            if ($property->properties) {
                $propertyProperties = json_encode($property->properties);
                $propertyProperties = "json_decode('$propertyProperties', true)";
            } else {
                $propertyProperties = "[]";
            }

            $properties = array_filter([
                'entity' => $property->entity,
                'referenceField' => $property->referenceField,
                'localField' => $property->localField,
                'relation' => $property->relation,
                'properties' => $property->properties ? $propertyProperties : null,
            ]);

            $propertiesArgs = "[";
            foreach ($properties as $key => $value) {
                $propertiesArgs .= $key === 'properties' ? "'$key' => " . "$propertyProperties, " : "'$key' => '$value', ";
            }
            $propertiesArgs .= "]";

            $flagCollectionString = sprintf($flagCollectionString, $flagCollectionArgs);
            $propertyArgumentString = sprintf("'%s', '%s', %s, %s", $keyProperty, $property->type, $flagCollectionString, $propertiesArgs);

            $propertiesString .= sprintf('    new Property(%s),', $propertyArgumentString);
            $propertiesString .= ClassGenerator::LINE_FEED;
        }

        $foo->getMethod('getSchema')->setReturnType('Schema')->setBody(sprintf("return new Schema('%s', new PropertyCollection([%s]));", $entity, $propertiesString));
        $foo->getConstant('ENTITY_NAME')->setDefaultValue($entity);


        static::$definitionMapping[$entity] = $foo->getNamespaceName() . "\\" . $entityName . 'Definition';

        return '<?php declare(strict_types=1);' . PHP_EOL . $foo->generate();
    }

    private static function escapeJson(array $input) {
        $escapedData = json_encode($input, JSON_HEX_QUOT|JSON_HEX_APOS );
//        $escapedData = str_replace('"', '\\"', $escapedData );
//        $escapedData = str_replace("'", "\\'",  $escapedData );
        return $escapedData;
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

        if ($property->isJsonField()) {
            return $prefix . 'array';
        }

        switch ($property->type) {
            case 'bool':
            case 'float':
            case 'int': {
                return $prefix . $property->type;
            }
            case 'boolean': {
                return $prefix . 'bool';
            }
            case 'date': {
                return $prefix . \DateTimeInterface::class;
            }
            default: {
                return null;
            }
        }
    }
}
