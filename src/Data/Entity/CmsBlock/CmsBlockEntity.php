<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\CmsBlock;

use Vin\ShopwareSdk\Data\Entity\CmsSection\CmsSectionEntity;
use Vin\ShopwareSdk\Data\Entity\Media\MediaEntity;
use Vin\ShopwareSdk\Data\Entity\CmsSlot\CmsSlotCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
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
