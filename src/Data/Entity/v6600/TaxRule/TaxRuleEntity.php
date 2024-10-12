<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6600\TaxRule;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6600\Country\CountryEntity;
use Vin\ShopwareSdk\Data\Entity\v6600\Tax\TaxEntity;
use Vin\ShopwareSdk\Data\Entity\v6600\TaxRuleType\TaxRuleTypeEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class TaxRuleEntity extends Entity
{
    public ?string $taxRuleTypeId = null;
    public ?string $countryId = null;
    public ?float $taxRate = null;
    public ?array $data = null;
    public ?string $taxId = null;
    public ?\DateTimeInterface $activeFrom = null;
    public ?TaxRuleTypeEntity $type = null;
    public ?CountryEntity $country = null;
    public ?TaxEntity $tax = null;
}
