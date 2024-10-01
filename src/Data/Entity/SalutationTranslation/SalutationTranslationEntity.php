<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\SalutationTranslation;

use Vin\ShopwareSdk\Data\Entity\Salutation\SalutationEntity;
use Vin\ShopwareSdk\Data\Entity\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class SalutationTranslationEntity extends Entity
{
    public ?string $displayName = null;

    public ?string $letterName = null;

    public ?string $salutationId = null;

    public ?string $languageId = null;

    public ?SalutationEntity $salutation = null;

    public ?LanguageEntity $language = null;
}
