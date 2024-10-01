<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\TaxProvider;

use Vin\ShopwareSdk\Data\Entity\TaxProviderTranslation\TaxProviderTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\Rule\RuleEntity;
use Vin\ShopwareSdk\Data\Entity\App\AppEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class TaxProviderEntity extends Entity
{
    public ?string $identifier = null;

    public ?bool $active = null;

    public ?string $name = null;

    public ?int $priority = null;

    public ?string $processUrl = null;

    public ?string $availabilityRuleId = null;

    public ?string $appId = null;

    public ?TaxProviderTranslationCollection $translations = null;

    public ?RuleEntity $availabilityRule = null;

    public ?AppEntity $app = null;
}
