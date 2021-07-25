<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\SasBlogEntriesTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(SasBlogEntriesTranslationEntity $entity)
 * @method void set(SasBlogEntriesTranslationEntity $entity)
 * @method SasBlogEntriesTranslationEntity[] getIterator()
 * @method SasBlogEntriesTranslationEntity[] getElements()
 * @method SasBlogEntriesTranslationEntity|null get(string $key)
 * @method SasBlogEntriesTranslationEntity|null first()
 * @method SasBlogEntriesTranslationEntity|null last()
 */
class SasBlogEntriesTranslationCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return SasBlogEntriesTranslationEntity::class;
    }
}
