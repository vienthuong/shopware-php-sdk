<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Service\Struct;

use Vin\ShopwareSdk\Data\Collection;

class NotificationCollection extends Collection
{
    private ?string $latestTimestamp;

    public function __construct(iterable $elements = [], ?string $latestTimestamp = null)
    {
        parent::__construct($elements);
        $this->latestTimestamp = $latestTimestamp;
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
