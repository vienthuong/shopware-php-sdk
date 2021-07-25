<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\SasBlogCategoryTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(SasBlogCategoryTranslationEntity $entity)
 * @method void set(SasBlogCategoryTranslationEntity $entity)
 * @method SasBlogCategoryTranslationEntity[] getIterator()
 * @method SasBlogCategoryTranslationEntity[] getElements()
 * @method SasBlogCategoryTranslationEntity|null get(string $key)
 * @method SasBlogCategoryTranslationEntity|null first()
 * @method SasBlogCategoryTranslationEntity|null last()
 */
class SasBlogCategoryTranslationCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return SasBlogCategoryTranslationEntity::class;
    }
}
