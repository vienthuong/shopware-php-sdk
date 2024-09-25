<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\CustomerGroupTranslation;

use Vin\ShopwareSdk\Data\Entity\CustomerGroup\CustomerGroupEntity;
use Vin\ShopwareSdk\Data\Entity\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class CustomerGroupTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $registrationTitle = null;

    public ?string $registrationIntroduction = null;

    public ?bool $registrationOnlyCompanyRegistration = null;

    public ?string $registrationSeoMetaDescription = null;

    public ?string $customerGroupId = null;

    public ?string $languageId = null;

    public ?CustomerGroupEntity $customerGroup = null;

    public ?LanguageEntity $language = null;
}
