<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6588\SalesChannelTypeTranslation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6588\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\v6588\SalesChannelType\SalesChannelTypeEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelTypeTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $manufacturer = null;

    public ?string $description = null;

    public ?string $descriptionLong = null;

    public ?string $salesChannelTypeId = null;

    public ?string $languageId = null;

    public ?SalesChannelTypeEntity $salesChannelType = null;

    public ?LanguageEntity $language = null;
}
