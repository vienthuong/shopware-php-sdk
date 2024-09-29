<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Webhook\AppAction;

use Vin\ShopwareSdk\Data\Struct;

class ActionData extends Struct
{
    public function __construct(
        protected array $ids,
        protected string $entity,
        protected string $action
    ) {
    }

    public function getAction(): string
    {
        return $this->action;
    }

    public function getEntity(): string
    {
        return $this->entity;
    }

    public function getIds(): array
    {
        return $this->ids;
    }
}
