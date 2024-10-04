<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v65812\LandingPageSalesChannel;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v65812\LandingPage\LandingPageEntity;
use Vin\ShopwareSdk\Data\Entity\v65812\SalesChannel\SalesChannelEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class LandingPageSalesChannelEntity extends Entity
{
    public ?string $landingPageId = null;

    public ?string $landingPageVersionId = null;

    public ?string $salesChannelId = null;

    public ?LandingPageEntity $landingPage = null;

    public ?SalesChannelEntity $salesChannel = null;
}