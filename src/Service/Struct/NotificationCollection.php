<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service\Struct;

use Vin\ShopwareSdk\Data\Collection;

class NotificationCollection extends Collection
{
    public function __construct(
        iterable $elements = [],
        private readonly ?string $latestTimestamp = null
    ) {
        parent::__construct($elements);
    }

    public function getLatestTimestamp(): ?string
    {
        return $this->latestTimestamp;
    }

    protected function getExpectedClass(): ?string
    {
        return Notification::class;
    }
}
