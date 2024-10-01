<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Repository\Struct;

use Vin\ShopwareSdk\Data\Struct;

class CloneBehaviour extends Struct
{
    public function __construct(
        protected bool $cloneChildren = true,
        protected array $overwrites = []
    ) {
    }

    public function isCloneChildren(): bool
    {
        return $this->cloneChildren;
    }

    public function setCloneChildren(bool $cloneChildren): void
    {
        $this->cloneChildren = $cloneChildren;
    }

    public function getOverwrites(): array
    {
        return $this->overwrites;
    }

    public function setOverwrites(array $overwrites): void
    {
        $this->overwrites = $overwrites;
    }
}
