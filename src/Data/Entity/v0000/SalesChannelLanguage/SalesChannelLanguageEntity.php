<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\SalesChannelLanguage;

use Vin\ShopwareSdk\Data\Entity\v0000\SalesChannel\SalesChannelEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class SalesChannelLanguageEntity extends Entity
{
    public ?string $salesChannelId = null;

    public ?string $languageId = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?LanguageEntity $language = null;
}
