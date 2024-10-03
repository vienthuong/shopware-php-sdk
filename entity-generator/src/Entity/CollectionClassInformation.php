<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkEntityGenerator\Entity;

use Symfony\Bundle\MakerBundle\Generator;
use Symfony\Bundle\MakerBundle\Util\UseStatementGenerator;
use Vin\ShopwareSdk\Data\Entity\EntityCollection;

final class CollectionClassInformation
{
    private const CLASS_NAMESPACE_PREFIX = 'Data\\Entity\\';

    private const CLASS_NAME_SUFFIX = 'Collection';

    /**
     * @var string[]
     */
    private array $usedClasses = [];

    public function __construct(
        private readonly string $entityName,
        private readonly EntityClassInformation $entityClassInformation,
    ) {
        $this->usedClasses[] = EntityCollection::class;
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
                'entity_class' => $this->entityClassInformation->generateClassName($generator),
            ]
        );
    }
}
