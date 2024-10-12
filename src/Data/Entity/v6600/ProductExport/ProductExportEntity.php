<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6600\ProductExport;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6600\Currency\CurrencyEntity;
use Vin\ShopwareSdk\Data\Entity\v6600\ProductStream\ProductStreamEntity;
use Vin\ShopwareSdk\Data\Entity\v6600\SalesChannel\SalesChannelEntity;
use Vin\ShopwareSdk\Data\Entity\v6600\SalesChannelDomain\SalesChannelDomainEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ProductExportEntity extends Entity
{
    public ?string $productStreamId = null;
    public ?string $storefrontSalesChannelId = null;
    public ?string $salesChannelId = null;
    public ?string $salesChannelDomainId = null;
    public ?string $currencyId = null;
    public ?string $fileName = null;
    public ?string $accessKey = null;
    public ?string $encoding = null;
    public ?string $fileFormat = null;
    public ?bool $includeVariants = null;
    public ?bool $generateByCronjob = null;
    public ?\DateTimeInterface $generatedAt = null;
    public ?int $interval = null;
    public ?string $headerTemplate = null;
    public ?string $bodyTemplate = null;
    public ?string $footerTemplate = null;
    public ?bool $pausedSchedule = null;
    public ?bool $isRunning = null;
    public ?ProductStreamEntity $productStream = null;
    public ?SalesChannelEntity $storefrontSalesChannel = null;
    public ?SalesChannelEntity $salesChannel = null;
    public ?SalesChannelDomainEntity $salesChannelDomain = null;
    public ?CurrencyEntity $currency = null;
}
