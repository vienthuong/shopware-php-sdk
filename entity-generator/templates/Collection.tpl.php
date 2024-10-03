<?= "<?php\n" ?>

declare(strict_types=1);

namespace <?= $namespace ?>;

<?= $use_statements; ?>

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(<?= $entity_class; ?> $entity)
 * @method void set(<?= $entity_class; ?> $entity)
 * @method <?= $entity_class; ?>[] getIterator()
 * @method <?= $entity_class; ?>[] getElements()
 * @method <?= $entity_class; ?>|null get(string $key)
 * @method <?= $entity_class; ?>|null first()
 * @method <?= $entity_class; ?>|null last()
*/
class <?= $class_name ?> extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return <?= $entity_class; ?>::class;
    }
}
