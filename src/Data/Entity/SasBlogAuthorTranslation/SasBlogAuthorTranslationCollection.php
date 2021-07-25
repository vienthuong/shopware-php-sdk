<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\SasBlogAuthorTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(SasBlogAuthorTranslationEntity $entity)
 * @method void set(SasBlogAuthorTranslationEntity $entity)
 * @method SasBlogAuthorTranslationEntity[] getIterator()
 * @method SasBlogAuthorTranslationEntity[] getElements()
 * @method SasBlogAuthorTranslationEntity|null get(string $key)
 * @method SasBlogAuthorTranslationEntity|null first()
 * @method SasBlogAuthorTranslationEntity|null last()
 */
class SasBlogAuthorTranslationCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return SasBlogAuthorTranslationEntity::class;
    }
}
