<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v65812\AppActionButtonTranslation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v65812\AppActionButton\AppActionButtonEntity;
use Vin\ShopwareSdk\Data\Entity\v65812\Language\LanguageEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class AppActionButtonTranslationEntity extends Entity
{
    public ?string $label = null;

    public ?string $appActionButtonId = null;

    public ?string $languageId = null;

    public ?AppActionButtonEntity $appActionButton = null;

    public ?LanguageEntity $language = null;
}
