<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6600\RuleTag;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6600\Rule\RuleEntity;
use Vin\ShopwareSdk\Data\Entity\v6600\Tag\TagEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class RuleTagEntity extends Entity
{
    public ?string $ruleId = null;
    public ?string $tagId = null;
    public ?RuleEntity $rule = null;
    public ?TagEntity $tag = null;
}
