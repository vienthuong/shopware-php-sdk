<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Repository\Struct;

use Vin\ShopwareSdk\Data\Context;
use Vin\ShopwareSdk\Data\Criteria;
use Vin\ShopwareSdk\Data\Utils\StringFormatter;

class IdSearchResult
{
    private int $total;

    private Criteria $criteria;

    private Context $context;

    private array $ids = [];

    private array $data = [];

    public function __construct(int $total, array $ids, Criteria $criteria, Context $context)
    {
        $this->total = $total;
        $this->ids = $ids;
        $this->data = $this->transformData($ids);
        $this->criteria = $criteria;
        $this->context = $context;
    }

    public function getTotal(): int
    {
        return $this->total;
    }

    public function setTotal(int $total): void
    {
        $this->total = $total;
    }

    public function getCriteria(): Criteria
    {
        return $this->criteria;
    }

    public function setCriteria(Criteria $criteria): void
    {
        $this->criteria = $criteria;
    }

    public function getContext(): Context
    {
        return $this->context;
    }

    public function setContext(Context $context): void
    {
        $this->context = $context;
    }

    public function getIds(): array
    {
        return $this->ids;
    }

    public function setIds(array $ids): void
    {
        $this->ids = $ids;
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function setData(array $data): void
    {
        $this->data = $data;
    }

    public function firstId(): ?string
    {
        if (empty($this->ids)) {
            return null;
        }

        return $this->ids[0];
    }

    private function transformData(array $data): array
    {
        if (empty($data)) {
            return [];
        }

        if (is_string($data[0])) {
            return array_map(function ($id) {
                return ['id' => $id];
            }, $data);
        }

        return array_map(function ($value) {
            $transformed = [];

            foreach ($value as $key => $item) {
                $transformed[StringFormatter::camelCase($key)] = $item;
            }

            return $transformed;
        }, $data);
    }
}
