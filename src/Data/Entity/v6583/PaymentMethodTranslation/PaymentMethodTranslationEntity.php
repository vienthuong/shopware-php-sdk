<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6583\PaymentMethodTranslation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6583\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\v6583\PaymentMethod\PaymentMethodEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class PaymentMethodTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $distinguishableName = null;

    public ?string $description = null;

    public ?string $paymentMethodId = null;

    public ?string $languageId = null;

    public ?PaymentMethodEntity $paymentMethod = null;

    public ?LanguageEntity $language = null;
}
