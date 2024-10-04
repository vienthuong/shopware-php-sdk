<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v65812\SalesChannelLanguage;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v65812\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\v65812\SalesChannel\SalesChannelEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelLanguageEntity extends Entity
{
    public ?string $salesChannelId = null;

    public ?string $languageId = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?LanguageEntity $language = null;
}