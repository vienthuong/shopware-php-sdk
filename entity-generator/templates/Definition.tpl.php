<?php

use Symfony\Component\VarExporter\VarExporter;
use Vin\ShopwareSdk\Data\Schema\Property;
use Vin\ShopwareSdk\Data\Schema\Flag;

?>
<?= "<?php\n" ?>

declare(strict_types=1);

namespace <?= $namespace ?>;

<?= $use_statements; ?>

/**
 * Shopware Definition Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class <?= $class_name ?> implements EntityDefinition
{
    public const ENTITY_NAME = '<?= $api_alias; ?>';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass(): string
    {
        return <?= $entity_class; ?>::class;
    }

    public function getEntityCollection(): string
    {
        return <?= $collection_class; ?>::class;
    }

    public function getSchema(): Schema
    {
        return new Schema('<?= $api_alias; ?>', new PropertyCollection([
<?php /** @var Property $property */ ?>
<?php foreach ($properties as $property) : ?>
<?php /** @var Flag $flag */ ?>
            new Property(<?= $property['name'] ?>, <?= $property['type'] ?>, <?= $property['flags'] ?>, <?= $property['properties'] ?>),
<?php endforeach; ?>
        ]));
    }
}
