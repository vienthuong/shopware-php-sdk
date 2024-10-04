<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6560\TaxProvider;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6560\App\AppEntity;
use Vin\ShopwareSdk\Data\Entity\v6560\Rule\RuleEntity;
use Vin\ShopwareSdk\Data\Entity\v6560\TaxProviderTranslation\TaxProviderTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
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
