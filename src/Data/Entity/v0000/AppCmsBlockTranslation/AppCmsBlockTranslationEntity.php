<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\AppCmsBlockTranslation;

use Vin\ShopwareSdk\Data\Entity\v0000\AppCmsBlock\AppCmsBlockEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class AppCmsBlockTranslationEntity extends Entity
{
    public ?string $label = null;

    public ?string $appCmsBlockId = null;

    public ?string $languageId = null;

    public ?AppCmsBlockEntity $appCmsBlock = null;

    public ?LanguageEntity $language = null;
}