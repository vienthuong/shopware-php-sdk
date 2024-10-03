<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v65812\PromotionTranslation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v65812\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\v65812\Promotion\PromotionEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class PromotionTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $promotionId = null;

    public ?string $languageId = null;

    public ?PromotionEntity $promotion = null;

    public ?LanguageEntity $language = null;
}
