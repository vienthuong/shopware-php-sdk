<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6560\DeliveryTimeTranslation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6560\DeliveryTime\DeliveryTimeEntity;
use Vin\ShopwareSdk\Data\Entity\v6560\Language\LanguageEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class DeliveryTimeTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $deliveryTimeId = null;

    public ?string $languageId = null;

    public ?DeliveryTimeEntity $deliveryTime = null;

    public ?LanguageEntity $language = null;
}
