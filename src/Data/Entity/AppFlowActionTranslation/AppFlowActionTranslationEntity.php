<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\AppFlowActionTranslation;

use Vin\ShopwareSdk\Data\Entity\AppFlowAction\AppFlowActionEntity;
use Vin\ShopwareSdk\Data\Entity\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class AppFlowActionTranslationEntity extends Entity
{
    public ?string $label = null;

    public ?string $description = null;

    public ?string $headline = null;

    public ?string $appFlowActionId = null;

    public ?string $languageId = null;

    public ?AppFlowActionEntity $appFlowAction = null;

    public ?LanguageEntity $language = null;
}
