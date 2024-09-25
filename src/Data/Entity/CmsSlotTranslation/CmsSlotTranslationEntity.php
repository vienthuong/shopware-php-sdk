<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\CmsSlotTranslation;

use Vin\ShopwareSdk\Data\Entity\CmsSlot\CmsSlotEntity;
use Vin\ShopwareSdk\Data\Entity\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class CmsSlotTranslationEntity extends Entity
{
    public ?array $config = null;

    public ?string $cmsSlotId = null;

    public ?string $languageId = null;

    public ?CmsSlotEntity $cmsSlot = null;

    public ?LanguageEntity $language = null;

    public ?string $cmsSlotVersionId = null;
}
