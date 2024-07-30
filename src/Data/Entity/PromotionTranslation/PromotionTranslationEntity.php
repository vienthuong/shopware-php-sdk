<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\PromotionTranslation;

use Vin\ShopwareSdk\Data\Entity\Promotion\PromotionEntity;
use Vin\ShopwareSdk\Data\Entity\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class PromotionTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $promotionId = null;

    public ?string $languageId = null;

    public ?PromotionEntity $promotion = null;

    public ?LanguageEntity $language = null;
}
