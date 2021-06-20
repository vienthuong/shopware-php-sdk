<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\PromotionTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionTranslationCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return PromotionTranslationEntity::class;
    }
}
