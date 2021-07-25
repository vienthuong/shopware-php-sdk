<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\SalesChannelTypeTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(SalesChannelTypeTranslationEntity $entity)
 * @method void set(SalesChannelTypeTranslationEntity $entity)
 * @method SalesChannelTypeTranslationEntity[] getIterator()
 * @method SalesChannelTypeTranslationEntity[] getElements()
 * @method SalesChannelTypeTranslationEntity|null get(string $key)
 * @method SalesChannelTypeTranslationEntity|null first()
 * @method SalesChannelTypeTranslationEntity|null last()
 */
class SalesChannelTypeTranslationCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return SalesChannelTypeTranslationEntity::class;
    }
}
