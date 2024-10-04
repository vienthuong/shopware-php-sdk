<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6588\ScheduledTask;

use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ScheduledTaskEntity extends Entity
{
    public ?string $name = null;

    public ?string $scheduledTaskClass = null;

    public ?int $runInterval = null;

    public ?string $status = null;

    public ?\DateTimeInterface $lastExecutionTime = null;

    public ?\DateTimeInterface $nextExecutionTime = null;

    public ?int $defaultRunInterval = null;
}
