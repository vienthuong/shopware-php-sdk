<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\SalesChannelLanguage;

use Vin\ShopwareSdk\Data\Entity\SalesChannel\SalesChannelEntity;
use Vin\ShopwareSdk\Data\Entity\Language\LanguageEntity;
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
