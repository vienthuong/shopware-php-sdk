<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkEntityGenerator\Entity;

use Symfony\Bundle\MakerBundle\Generator;
use Symfony\Bundle\MakerBundle\Util\UseStatementGenerator;
use Vin\ShopwareSdk\Data\Entity\Entity;

final class EntityClassInformation
{
    private const TYPES_THAT_REQUIRE_NO_USE_STATEMENT = ['bool', 'float', 'int', 'array', 'string'];

    private const CLASS_NAMESPACE_PREFIX = 'Data\\Entity\\';

    private const CLASS_NAME_SUFFIX = 'Entity';

    private static ?array $classPropertiesOfBaseClass = null;

    /**
     * @var string[]
     */
    private array $usedClasses = [];

    /**
     * @var array{type: string, name: string}[]
     */
    private array $properties = [];

    public function __construct(
        private readonly string $entityName,
    ) {
        $this->usedClasses[] = Entity::class;
    }

    public function addProperty(string $fullyQualifiedType, string $propertyName): void
    {
        $type = $fullyQualifiedType;
        if (in_array($fullyQualifiedType, self::TYPES_THAT_REQUIRE_NO_USE_STATEMENT) === false && $fullyQualifiedType !== '') {
            $this->usedClasses[] = $fullyQualifiedType;
            $typeParts = explode('\\', $fullyQualifiedType);
            $type = end($typeParts);
        }

        $this->properties[] = [
            'type' => $type,
            'name' => $propertyName,
        ];
    }

    public function getPropertiesWithoutBaseClassProperties(): array
    {
        $classPropertiesOfBaseClass = $this->getClassPropertiesOfBaseClass();

        $properties = [];
        foreach ($this->properties as $property) {
            if (in_array($property['name'], $classPropertiesOfBaseClass)) {
                continue;
            }

            $properties[] = sprintf('?%s $%s = null', $property['type'], $property['name']);
        }

        return $properties;
    }

    public function generateClassName(Generator $generator): string
    {
        $classDetails = $generator->createClassNameDetails(
            $this->entityName,
            self::CLASS_NAMESPACE_PREFIX . $this->entityName . '\\',
            self::CLASS_NAME_SUFFIX
        );

        return $classDetails->getRelativeName();
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
                'properties' => $this->getPropertiesWithoutBaseClassProperties(),
            ]
        );
    }

    private function getClassPropertiesOfBaseClass(): array
    {
        if (is_array(self::$classPropertiesOfBaseClass)) {
            return self::$classPropertiesOfBaseClass;
        }

        $reflectionClass = new \ReflectionClass(Entity::class);
        $properties = [];
        foreach ($reflectionClass->getProperties() as $property) {
            $properties[] = $property->getName();
        }

        self::$classPropertiesOfBaseClass = $properties;

        return $properties;
    }
}
