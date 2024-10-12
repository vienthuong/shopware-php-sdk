<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6640\ShippingMethodTranslation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6640\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\v6640\ShippingMethod\ShippingMethodEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
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
