<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Service\Struct;

use Vin\ShopwareSdk\Data\Criteria;
use Vin\ShopwareSdk\Data\Filter\Filter;
use Vin\ShopwareSdk\Data\ParseAware;
use Vin\ShopwareSdk\Data\Struct;

class SyncOperator extends Struct implements ParseAware
{
    public const UPSERT_OPERATOR = 'upsert';

    public const DELETE_OPERATOR = 'delete';

    public function __construct(
        protected string $entity,
        protected string $action,
        protected array $payload,
        protected ?Criteria $criteria = null
    )
    {
        if ($action !== self::UPSERT_OPERATOR && $action !== self::DELETE_OPERATOR) {
            throw new \InvalidArgumentException('Action ' . $action . ' is not allowed, allowed types: upsert, delete');
        }

        if ( !\in_array($this->action, $this->getSupportedActions(), true)) {
            throw new \InvalidArgumentException(
                'Action ' . $this->action . ' is not allowed, allowed types: ' . implode(', ', $this->getSupportedActions())
            );
        }

        if (empty($this->payload) && empty($this->criteria)) {
            throw new \InvalidArgumentException('Payload or criteria must be set');
        }
    }

    public function getEntity(): string
    {
        return $this->entity;
    }

    public function addPayload(array $item): void
    {
        $this->payload[] = $item;
    }

    public function getPayload(): array
    {
        return $this->payload;
    }

    public function setPayload(array $payload): void
    {
        $this->payload = $payload;
    }

    public function getCriteria(): ?Criteria
    {
        return $this->criteria;
    }

    public function parse(): array
    {
        return [
            'entity' => $this->entity,
            'action' => $this->action,
            'payload' => $this->payload,
            'criteria' => array_map(function (Filter $filter) {
                return $filter->parse();
            }, $this->criteria?->getFilters() ?? []),
        ];
    }

    /**
     * @return string[]
     */
    public function getSupportedActions(): array
    {
        return [self::UPSERT_OPERATOR, self::DELETE_OPERATOR];
    }
}
