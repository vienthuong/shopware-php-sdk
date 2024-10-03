<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\AppTranslation;

use Vin\ShopwareSdk\Data\Entity\v0000\App\AppEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class AppTranslationEntity extends Entity
{
    public ?string $label = null;

    public ?string $description = null;

    public ?string $privacyPolicyExtensions = null;

    public ?string $appId = null;

    public ?string $languageId = null;

    public ?AppEntity $app = null;

    public ?LanguageEntity $language = null;
}
