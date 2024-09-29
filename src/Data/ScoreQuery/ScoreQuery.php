<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\ScoreQuery;

use Vin\ShopwareSdk\Data\Filter\Filter;

class ScoreQuery extends Filter
{
    public function __construct(
        protected Filter $query,
        protected float $score,
        protected ?string $scoreField = null
    ) {
    }

    public function getScore(): float
    {
        return $this->score;
    }

    public function getQuery(): Filter
    {
        return $this->query;
    }

    public function getScoreField(): ?string
    {
        return $this->scoreField;
    }

    public function parse(): array
    {
        return array_filter([
            'score' => $this->score,
            'query' => $this->query->parse(),
            'scoreField' => $this->scoreField,
        ]);
    }
}
