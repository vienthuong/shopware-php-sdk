<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkEntityGenerator\Entity;

use Symfony\Bundle\MakerBundle\Generator;
use Symfony\Bundle\MakerBundle\Util\UseStatementGenerator;
use Vin\ShopwareSdkEntityGenerator\Entity\PropertyDefinition\FlagGeneratorInterface;
use Vin\ShopwareSdkEntityGenerator\Entity\PropertyDefinition\PropertiesGeneratorInterface;
use Vin\ShopwareSdk\Data\Entity\EntityDefinition;
use Vin\ShopwareSdk\Data\Schema\Flag;
use Vin\ShopwareSdk\Data\Schema\FlagCollection;
use Vin\ShopwareSdk\Data\Schema\Property;
use Vin\ShopwareSdk\Data\Schema\PropertyCollection;
use Vin\ShopwareSdk\Data\Schema\Schema;

final class DefinitionClassInformation
{
    private const CLASS_NAMESPACE_PREFIX = 'Data\\Entity\\';

    private const CLASS_NAME_SUFFIX = 'Definition';

    private const PROPERTY_INDENTATION_WHITESPACE_COUNT = 16;

    /**
     * @var string[]
     */
    private array $usedClasses = [];

    private array $properties;

    public function __construct(
        private readonly string $entityName,
        private readonly string $apiAlias,
        private readonly EntityClassInformation $entityClassInformation,
        private readonly CollectionClassInformation $collectionClassInformation,
    ) {
        $this->usedClasses[] = EntityDefinition::class;
        $this->usedClasses[] = Schema::class;
        $this->usedClasses[] = PropertyCollection::class;
        $this->usedClasses[] = Property::class;
        $this->usedClasses[] = FlagCollection::class;
        $this->usedClasses[] = Flag::class;
    }

    public function addProperty(Property $schemaProperty, FlagGeneratorInterface $flagGenerator, PropertiesGeneratorInterface $propertiesGenerator): void
    {
        $this->properties[$schemaProperty->name] = [
            'name' => '\'' . $schemaProperty->name . '\'',
            'type' => '\'' . $schemaProperty->type . '\'',
        ];

        $flatConstructionStrings = [];
        /** @var Flag $flag */
        foreach ($schemaProperty->flags as $flag) {
            $flatConstructionStrings[] = $flagGenerator->generateFlagConstructionString($flag->flag, $flag->value);
        }
        $this->properties[$schemaProperty->name]['flags'] = sprintf('new FlagCollection([%s])', implode(', ', $flatConstructionStrings));

        $this->properties[$schemaProperty->name]['properties'] = $propertiesGenerator->generatePropertiesArrayString(
            $schemaProperty->entity,
            $schemaProperty->referenceField,
            $schemaProperty->localField,
            $schemaProperty->relation,
            $schemaProperty->properties,
            self::PROPERTY_INDENTATION_WHITESPACE_COUNT
        );
    }

    public function generateClass(Generator $generator, string $templatePath): void
    {
        $classDetails = $generator->createClassNameDetails(
            $this->entityName,
            self::CLASS_NAMESPACE_PREFIX . $this->entityName . '\\',
            self::CLASS_NAME_SUFFIX
        );

        $generator->generateClass(
            $classDetails->getFullName(),
            $templatePath,
            [
                'use_statements' => new UseStatementGenerator($this->usedClasses),
                'api_alias' => $this->apiAlias,
                'entity_class' => $this->entityClassInformation->generateClassName($generator),
                'collection_class' => $this->collectionClassInformation->generateClassName($generator),
                'properties' => $this->properties,
            ]
        );
    }
}
