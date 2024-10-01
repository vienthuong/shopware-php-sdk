<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\LandingPage;

use Vin\ShopwareSdk\Data\Entity\LandingPageTranslation\LandingPageTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\Tag\TagCollection;
use Vin\ShopwareSdk\Data\Entity\CmsPage\CmsPageEntity;
use Vin\ShopwareSdk\Data\Entity\SalesChannel\SalesChannelCollection;
use Vin\ShopwareSdk\Data\Entity\SeoUrl\SeoUrlCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class LandingPageEntity extends Entity
{
    public ?bool $active = null;

    public ?string $name = null;

    public ?array $slotConfig = null;

    public ?string $metaTitle = null;

    public ?string $metaDescription = null;

    public ?string $keywords = null;

    public ?string $url = null;

    public ?LandingPageTranslationCollection $translations = null;

    public ?TagCollection $tags = null;

    public ?string $cmsPageId = null;

    public ?CmsPageEntity $cmsPage = null;

    public ?SalesChannelCollection $salesChannels = null;

    public ?SeoUrlCollection $seoUrls = null;

    public ?string $cmsPageVersionId = null;
}
