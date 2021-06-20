<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Repository\Struct;

use Vin\ShopwareSdk\Data\Context;
use Vin\ShopwareSdk\Data\Criteria;
use Vin\ShopwareSdk\Data\Utils\StringFormatter;

class IdSearchResult
{
    public int $total;

    public Criteria $criteria;

    public Context $context;

    public array $ids = [];

    public array $data = [];

    public function __construct(int $total, array $ids, Criteria $criteria, Context $context)
    {
        $this->total = $total;
        $this->ids = $ids;
        $this->data = $this->transformData($ids);
        $this->criteria = $criteria;
        $this->context = $context;
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
