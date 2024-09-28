<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Repository\Struct;

use Vin\ShopwareSdk\Data\Context;
use Vin\ShopwareSdk\Data\Criteria;
use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\EntityCollection;

class EntitySearchResult
{
    public array $data = [];

    public function __construct(public string $entityName, public SearchResultMeta $meta, public EntityCollection $entities, public AggregationResultCollection $aggregations, public Criteria $criteria, public Context $context)
    {
    }

    public function getMeta(): SearchResultMeta
    {
        return $this->meta;
    }

    public function setMeta(SearchResultMeta $meta): void
    {
        $this->meta = $meta;
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

    public function getData(): array
    {
        return $this->data;
    }

    public function setData(array $data): void
    {
        $this->data = $data;
    }

    public function getEntityName(): string
    {
        return $this->entityName;
    }

    public function setEntityName(string $entityName): void
    {
        $this->entityName = $entityName;
    }

    public function getEntities(): EntityCollection
    {
        return $this->entities;
    }

    public function get(string $id): ?Entity
    {
        return $this->entities->get($id);
    }

    public function first(): ?Entity
    {
        return $this->entities->first();
    }

    public function last(): ?Entity
    {
        return $this->entities->last();
    }

    public function count(): int
    {
        return $this->entities->count();
    }

    public function setEntities(EntityCollection $entities): void
    {
        $this->entities = $entities;
    }

    public function getAggregations(): AggregationResultCollection
    {
        return $this->aggregations;
    }

    public function setAggregations(AggregationResultCollection $aggregations): void
    {
        $this->aggregations = $aggregations;
    }
}
