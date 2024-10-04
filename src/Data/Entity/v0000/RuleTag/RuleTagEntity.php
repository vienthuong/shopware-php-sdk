<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\RuleTag;

use Vin\ShopwareSdk\Data\Entity\v0000\Rule\RuleEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\Tag\TagEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class RuleTagEntity extends Entity
{
    public ?string $ruleId = null;

    public ?string $tagId = null;

    public ?RuleEntity $rule = null;

    public ?TagEntity $tag = null;
}
