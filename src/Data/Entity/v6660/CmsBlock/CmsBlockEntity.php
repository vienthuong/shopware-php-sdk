<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6660\CmsBlock;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6660\CmsSection\CmsSectionEntity;
use Vin\ShopwareSdk\Data\Entity\v6660\CmsSlot\CmsSlotCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\Media\MediaEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CmsBlockEntity extends Entity
{
    public ?int $position = null;
    public ?string $type = null;
    public ?bool $locked = null;
    public ?string $name = null;
    public ?string $sectionPosition = null;
    public ?string $marginTop = null;
    public ?string $marginBottom = null;
    public ?string $marginLeft = null;
    public ?string $marginRight = null;
    public ?string $backgroundColor = null;
    public ?string $backgroundMediaId = null;
    public ?string $backgroundMediaMode = null;
    public ?string $cssClass = null;
    public ?array $visibility = null;
    public ?string $sectionId = null;
    public ?CmsSectionEntity $section = null;
    public ?MediaEntity $backgroundMedia = null;
    public ?CmsSlotCollection $slots = null;
    public ?string $cmsSectionVersionId = null;
}
