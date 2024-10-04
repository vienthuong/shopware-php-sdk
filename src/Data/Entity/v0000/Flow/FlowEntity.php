<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\Flow;

use Vin\ShopwareSdk\Data\Entity\v0000\FlowSequence\FlowSequenceCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
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
}
