<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\TaxRuleTypeTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(TaxRuleTypeTranslationEntity $entity)
 * @method void set(string $key, TaxRuleTypeTranslationEntity $entity)
 * @method TaxRuleTypeTranslationEntity[] getIterator()
 * @method TaxRuleTypeTranslationEntity[] getElements()
 * @method TaxRuleTypeTranslationEntity|null get(string $key)
 * @method TaxRuleTypeTranslationEntity|null first()
 * @method TaxRuleTypeTranslationEntity|null last()
 */
class TaxRuleTypeTranslationCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return TaxRuleTypeTranslationEntity::class;
    }
}
