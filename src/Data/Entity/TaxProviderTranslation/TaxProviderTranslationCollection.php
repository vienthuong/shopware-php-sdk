<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\TaxProviderTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(TaxProviderTranslationEntity $entity)
 * @method void set(TaxProviderTranslationEntity $entity)
 * @method TaxProviderTranslationEntity[] getIterator()
 * @method TaxProviderTranslationEntity[] getElements()
 * @method TaxProviderTranslationEntity|null get(string $key)
 * @method TaxProviderTranslationEntity|null first()
 * @method TaxProviderTranslationEntity|null last()
 */
class TaxProviderTranslationCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return TaxProviderTranslationEntity::class;
    }
}
