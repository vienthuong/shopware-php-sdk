<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\DeadMessage;

use Vin\ShopwareSdk\Data\Entity\ScheduledTask\ScheduledTaskEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class DeadMessageEntity extends Entity
{
    public ?string $originalMessageClass = null;

    public ?string $serializedOriginalMessage = null;

    public ?string $handlerClass = null;

    public ?bool $encrypted = null;

    public ?int $errorCount = null;

    public ?\DateTimeInterface$nextExecutionTime = null;

    public ?string $exception = null;

    public ?string $exceptionMessage = null;

    public ?string $exceptionFile = null;

    public ?int $exceptionLine = null;

    public ?string $scheduledTaskId = null;

    public ?ScheduledTaskEntity $scheduledTask = null;
}
