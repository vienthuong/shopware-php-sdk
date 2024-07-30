<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\SalesChannelTypeTranslation;

use Vin\ShopwareSdk\Data\Entity\SalesChannelType\SalesChannelTypeEntity;
use Vin\ShopwareSdk\Data\Entity\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
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
