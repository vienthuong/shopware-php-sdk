<?= "<?php\n" ?>

declare(strict_types=1);

namespace <?= $namespace ?>;

<?= $use_statements; ?>

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
*/
class <?= $class_name ?> extends Entity
{
<?php foreach ($properties as $property) : ?>
    public <?= $property ?>;
<?php endforeach; ?>
}
