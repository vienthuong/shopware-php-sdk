<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkEntityGenerator\Maker;

use Symfony\Bundle\MakerBundle\ConsoleStyle;
use Symfony\Bundle\MakerBundle\DependencyBuilder;
use Symfony\Bundle\MakerBundle\Generator;
use Symfony\Bundle\MakerBundle\InputConfiguration;
use Symfony\Bundle\MakerBundle\Maker\AbstractMaker;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Vin\ShopwareSdkEntityGenerator\Entity\ClassProperty\TypeGeneratorInterface;
use Vin\ShopwareSdkEntityGenerator\Entity\CollectionClassInformation;
use Vin\ShopwareSdkEntityGenerator\Entity\DefinitionClassInformation;
use Vin\ShopwareSdkEntityGenerator\Entity\EntityClassInformation;
use Vin\ShopwareSdkEntityGenerator\Entity\PropertyDefinition\FlagGeneratorInterface;
use Vin\ShopwareSdk\Data\Schema\Property;
use Vin\ShopwareSdk\Data\Schema\Schema;
use Vin\ShopwareSdkEntityGenerator\Entity\PropertyDefinition\PropertiesGeneratorInterface;
use Vin\ShopwareSdkEntityGenerator\Shopware\EntitySchemaCollectionProviderInterface;
use function Symfony\Component\String\u;

/**
 * @method string getCommandDescription()
 */
final class MakeEntities extends AbstractMaker
{
    public function __construct(
        private readonly EntitySchemaCollectionProviderInterface $entitySchemaCollectionProvider,
        private readonly TypeGeneratorInterface $classPropertyTypeGenerator,
        private readonly FlagGeneratorInterface $flagGenerator,
        private readonly PropertiesGeneratorInterface $propertiesGenerator
    ) {
    }

    public static function getCommandName(): string
    {
        return 'make:shopware-sdk:entities';
    }

    public static function getCommandDescription(): string
    {
        return 'Create definition, entity and collection classes.';
    }

    public function configureCommand(Command $command, InputConfiguration $inputConfig): void
    {
        //$command->addArgument('entity-name', InputArgument::OPTIONAL, 'Choose an entity by its name. If no entity is chosen, the classes for all entities in the schema will be generated.');
    }

    public function configureDependencies(DependencyBuilder $dependencies): void
    {
    }

    public function generate(InputInterface $input, ConsoleStyle $io, Generator $generator): void
    {
        $entitySchemaCollection = $this->entitySchemaCollectionProvider->getSchemaCollection();

        /** @var Schema $entitySchema */
        foreach ($entitySchemaCollection->getElements() as $entitySchema) {
            $entityName = u($entitySchema->entity)
                ->camel()
                ->title();

            $entityClassInformation = new EntityClassInformation((string) $entityName);
            $collectionClassInformation = new CollectionClassInformation((string) $entityName, $entityClassInformation);
            $definitionClassInformation = new DefinitionClassInformation(
                (string) $entityName,
                $entitySchema->entity,
                $entityClassInformation,
                $collectionClassInformation
            );

            /** @var Property $property */
            foreach ($entitySchema->properties as $property) {
                $type = $this->classPropertyTypeGenerator->generateClassPropertyType($property);
                $entityClassInformation->addProperty($type, $property->name);
                $definitionClassInformation->addProperty($property, $this->flagGenerator, $this->propertiesGenerator);
            }

            $entityClassInformation->generateClass($generator, 'templates/Entity.tpl.php');
            $collectionClassInformation->generateClass($generator, 'templates/Collection.tpl.php');
            $definitionClassInformation->generateClass($generator, 'templates/Definition.tpl.php');
        }

        $this->writeSuccessMessage($io);
    }
}
