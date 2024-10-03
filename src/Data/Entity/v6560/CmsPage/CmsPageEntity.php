<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6560\CmsPage;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6560\Category\CategoryCollection;
use Vin\ShopwareSdk\Data\Entity\v6560\CmsPageTranslation\CmsPageTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6560\CmsSection\CmsSectionCollection;
use Vin\ShopwareSdk\Data\Entity\v6560\LandingPage\LandingPageCollection;
use Vin\ShopwareSdk\Data\Entity\v6560\Media\MediaEntity;
use Vin\ShopwareSdk\Data\Entity\v6560\Product\ProductCollection;
use Vin\ShopwareSdk\Data\Entity\v6560\SalesChannel\SalesChannelCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CmsPageEntity extends Entity
{
    public ?string $name = null;

    public ?string $type = null;

    public ?string $entity = null;

    public ?string $cssClass = null;

    public ?array $config = null;

    public ?string $previewMediaId = null;

    public ?bool $locked = null;

    public ?CmsSectionCollection $sections = null;

    public ?CmsPageTranslationCollection $translations = null;

    public ?MediaEntity $previewMedia = null;

    public ?CategoryCollection $categories = null;

    public ?LandingPageCollection $landingPages = null;

    public ?SalesChannelCollection $homeSalesChannels = null;

    public ?ProductCollection $products = null;
}
