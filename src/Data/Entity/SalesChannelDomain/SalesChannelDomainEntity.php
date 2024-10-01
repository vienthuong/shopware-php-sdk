<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\SalesChannelDomain;

use Vin\ShopwareSdk\Data\Entity\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\Currency\CurrencyEntity;
use Vin\ShopwareSdk\Data\Entity\SnippetSet\SnippetSetEntity;
use Vin\ShopwareSdk\Data\Entity\SalesChannel\SalesChannelEntity;
use Vin\ShopwareSdk\Data\Entity\ProductExport\ProductExportCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class SalesChannelDomainEntity extends Entity
{
    public ?string $url = null;

    public ?string $salesChannelId = null;

    public ?string $languageId = null;

    public ?string $currencyId = null;

    public ?string $snippetSetId = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?LanguageEntity $language = null;

    public ?CurrencyEntity $currency = null;

    public ?SnippetSetEntity $snippetSet = null;

    public ?SalesChannelEntity $salesChannelDefaultHreflang = null;

    public ?ProductExportCollection $productExports = null;

    public ?bool $hreflangUseOnlyLocale = null;
}
