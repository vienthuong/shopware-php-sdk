<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6660\LandingPageTag;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6660\LandingPage\LandingPageEntity;
use Vin\ShopwareSdk\Data\Entity\v6660\Tag\TagEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class LandingPageTagEntity extends Entity
{
    public ?string $landingPageId = null;
    public ?string $landingPageVersionId = null;
    public ?string $tagId = null;
    public ?LandingPageEntity $landingPage = null;
    public ?TagEntity $tag = null;
}
