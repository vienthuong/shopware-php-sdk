<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\MediaTranslation;

use Vin\ShopwareSdk\Data\Entity\v0000\Media\MediaEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class MediaTranslationEntity extends Entity
{
    public ?string $title = null;

    public ?string $alt = null;

    public ?string $mediaId = null;

    public ?string $languageId = null;

    public ?MediaEntity $media = null;

    public ?LanguageEntity $language = null;
}
