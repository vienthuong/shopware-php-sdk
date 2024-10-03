<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6560\Flow;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6560\AppFlowEvent\AppFlowEventEntity;
use Vin\ShopwareSdk\Data\Entity\v6560\FlowSequence\FlowSequenceCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class FlowEntity extends Entity
{
    public ?string $name = null;

    public ?string $eventName = null;

    public ?int $priority = null;

    public ?string $payload = null;

    public ?bool $invalid = null;

    public ?bool $active = null;

    public ?string $description = null;

    public ?FlowSequenceCollection $sequences = null;

    public ?string $appFlowEventId = null;

    public ?AppFlowEventEntity $appFlowEvent = null;
}
