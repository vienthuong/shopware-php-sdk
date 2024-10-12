<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6600\SeoUrl;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6600\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\v6600\SalesChannel\SalesChannelEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class SeoUrlEntity extends Entity
{
    public ?string $salesChannelId = null;
    public ?string $languageId = null;
    public ?string $foreignKey = null;
    public ?string $routeName = null;
    public ?string $pathInfo = null;
    public ?string $seoPathInfo = null;
    public ?bool $isCanonical = null;
    public ?bool $isModified = null;
    public ?bool $isDeleted = null;
    public ?string $error = null;
    public ?string $url = null;
    public ?LanguageEntity $language = null;
    public ?SalesChannelEntity $salesChannel = null;
}
