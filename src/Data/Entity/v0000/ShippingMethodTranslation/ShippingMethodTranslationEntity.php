<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\ShippingMethodTranslation;

use Vin\ShopwareSdk\Data\Entity\v0000\ShippingMethod\ShippingMethodEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class ShippingMethodTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $description = null;

    public ?string $trackingUrl = null;

    public ?string $shippingMethodId = null;

    public ?string $languageId = null;

    public ?ShippingMethodEntity $shippingMethod = null;

    public ?LanguageEntity $language = null;
}
