<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\LandingPageSalesChannel;

use Vin\ShopwareSdk\Data\Entity\LandingPage\LandingPageEntity;
use Vin\ShopwareSdk\Data\Entity\SalesChannel\SalesChannelEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class LandingPageSalesChannelEntity extends Entity
{
    public ?string $landingPageId = null;

    public ?string $landingPageVersionId = null;

    public ?string $salesChannelId = null;

    public ?LandingPageEntity $landingPage = null;

    public ?SalesChannelEntity $salesChannel = null;
}
