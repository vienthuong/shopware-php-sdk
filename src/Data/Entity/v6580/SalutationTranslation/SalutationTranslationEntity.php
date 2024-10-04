<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6580\SalutationTranslation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6580\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\v6580\Salutation\SalutationEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class SalutationTranslationEntity extends Entity
{
    public ?string $displayName = null;

    public ?string $letterName = null;

    public ?string $salutationId = null;

    public ?string $languageId = null;

    public ?SalutationEntity $salutation = null;

    public ?LanguageEntity $language = null;
}
