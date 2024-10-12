<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6650\CmsSlot;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6650\CmsBlock\CmsBlockEntity;
use Vin\ShopwareSdk\Data\Entity\v6650\CmsSlotTranslation\CmsSlotTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class CmsSlotEntity extends Entity
{
    public ?string $type = null;
    public ?string $slot = null;
    public ?bool $locked = null;
    public ?array $config = null;
    public ?array $data = null;
    public ?string $blockId = null;
    public ?CmsBlockEntity $block = null;
    public ?CmsSlotTranslationCollection $translations = null;
    public ?array $fieldConfig = null;
    public ?string $cmsBlockVersionId = null;
}
