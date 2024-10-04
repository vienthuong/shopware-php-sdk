<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v65812\FlowSequence;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v65812\AppFlowAction\AppFlowActionEntity;
use Vin\ShopwareSdk\Data\Entity\v65812\Flow\FlowEntity;
use Vin\ShopwareSdk\Data\Entity\v65812\Rule\RuleEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class FlowSequenceEntity extends Entity
{
    public ?string $flowId = null;

    public ?string $ruleId = null;

    public ?string $actionName = null;

    public ?array $config = null;

    public ?int $position = null;

    public ?int $displayGroup = null;

    public ?bool $trueCase = null;

    public ?FlowEntity $flow = null;

    public ?RuleEntity $rule = null;

    public ?FlowSequenceEntity $parent = null;

    public ?FlowSequenceCollection $children = null;

    public ?string $parentId = null;

    public ?string $appFlowActionId = null;

    public ?AppFlowActionEntity $appFlowAction = null;
}
