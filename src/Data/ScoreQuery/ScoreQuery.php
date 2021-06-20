<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\ScoreQuery;

use Vin\ShopwareSdk\Data\Filter\Filter;

class ScoreQuery extends Filter
{
    protected float $score;

    protected Filter $query;

    protected ?string $scoreField;

    public function __construct(Filter $query, float $score, ?string $scoreField = null)
    {
        $this->score = $score;
        $this->query = $query;
        $this->scoreField = $scoreField;
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
            'scoreField' => $this->scoreField
        ]);
    }
}
