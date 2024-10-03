<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6580\SalesChannelTranslation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6580\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\v6580\SalesChannel\SalesChannelEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class SalesChannelTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?array $homeSlotConfig = null;

    public ?bool $homeEnabled = null;

    public ?string $homeName = null;

    public ?string $homeMetaTitle = null;

    public ?string $homeMetaDescription = null;

    public ?string $homeKeywords = null;

    public ?string $salesChannelId = null;

    public ?string $languageId = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?LanguageEntity $language = null;
}
