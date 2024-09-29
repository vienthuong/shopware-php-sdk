<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\PluginTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(PluginTranslationEntity $entity)
 * @method void set(PluginTranslationEntity $entity)
 * @method PluginTranslationEntity[] getIterator()
 * @method PluginTranslationEntity[] getElements()
 * @method PluginTranslationEntity|null get(string $key)
 * @method PluginTranslationEntity|null first()
 * @method PluginTranslationEntity|null last()
 */
class PluginTranslationCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return PluginTranslationEntity::class;
    }
}
