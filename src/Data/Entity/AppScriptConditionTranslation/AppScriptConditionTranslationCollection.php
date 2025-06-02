<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\AppScriptConditionTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(AppScriptConditionTranslationEntity $entity)
 * @method void set(string $key, AppScriptConditionTranslationEntity $entity)
 * @method AppScriptConditionTranslationEntity[] getIterator()
 * @method AppScriptConditionTranslationEntity[] getElements()
 * @method AppScriptConditionTranslationEntity|null get(string $key)
 * @method AppScriptConditionTranslationEntity|null first()
 * @method AppScriptConditionTranslationEntity|null last()
 */
class AppScriptConditionTranslationCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return AppScriptConditionTranslationEntity::class;
    }
}
