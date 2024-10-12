<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6660\MediaTranslation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6660\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\v6660\Media\MediaEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class MediaTranslationEntity extends Entity
{
    public ?string $title = null;
    public ?string $alt = null;
    public ?string $mediaId = null;
    public ?string $languageId = null;
    public ?MediaEntity $media = null;
    public ?LanguageEntity $language = null;
}
