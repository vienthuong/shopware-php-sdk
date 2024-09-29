<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\LandingPageTag;

use Vin\ShopwareSdk\Data\Entity\LandingPage\LandingPageEntity;
use Vin\ShopwareSdk\Data\Entity\Tag\TagEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class LandingPageTagEntity extends Entity
{
    public ?string $landingPageId = null;

    public ?string $landingPageVersionId = null;

    public ?string $tagId = null;

    public ?LandingPageEntity $landingPage = null;

    public ?TagEntity $tag = null;
}
