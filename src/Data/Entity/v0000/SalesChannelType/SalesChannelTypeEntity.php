<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\SalesChannelType;

use Vin\ShopwareSdk\Data\Entity\v0000\SalesChannelTypeTranslation\SalesChannelTypeTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v0000\SalesChannel\SalesChannelCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class SalesChannelTypeEntity extends Entity
{
    public ?string $coverUrl = null;

    public ?string $iconName = null;

    public ?array $screenshotUrls = null;

    public ?string $name = null;

    public ?string $manufacturer = null;

    public ?string $description = null;

    public ?string $descriptionLong = null;

    public ?SalesChannelTypeTranslationCollection $translations = null;

    public ?SalesChannelCollection $salesChannels = null;
}
