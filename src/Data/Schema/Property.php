<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Schema;

use Vin\ShopwareSdk\Data\Struct;

class Property extends Struct
{
    private const SCALAR_TYPES = ['uuid', 'int', 'text', 'password', 'float', 'string', 'blob', 'boolean', 'date'];

    private const JSON_TYPES = ['json_list', 'json_object'];

    public string $type;

    public FlagCollection $flags;

    public ?string $relation;

    public ?string $reference;

    public ?string $mapping;

    public ?string $local;

    public ?string $localField;

    public ?string $referenceField;

    public ?string $entity;

    public ?array $properties;

    public string $name;

    public function __construct(
        string $name,
        string $type,
        FlagCollection $flags,
        array $properties = []
    ) {
        $this->type = $type;
        $this->flags = $flags;
        $this->relation = $properties['relation'] ?? null;
        $this->local = $properties['local'] ?? null;
        $this->localField = $properties['localField'] ?? null;
        $this->reference = $properties['reference'] ?? null;
        $this->referenceField = $properties['referenceField'] ?? null;
        $this->entity = $properties['entity'] ?? null;
        $this->mapping = $properties['mapping'] ?? null;
        $this->properties = $properties['properties'] ?? null;
        $this->name = $name;
    }

    public function isScalarField(): bool
    {
        return in_array($this->type, self::SCALAR_TYPES);
    }

    public function isStringField(): bool
    {
        return in_array($this->type, ['uuid', 'string', 'password', 'text', 'blob']);
    }

    public function isJsonField(): bool
    {
        return in_array($this->type, self::JSON_TYPES);
    }

    public function isJsonObjectField(): bool
    {
        return $this->type === 'json_object';
    }

    public function isJsonListField(): bool
    {
        return $this->type === 'json_list';
    }

    public function isAssociation(): bool
    {
        return $this->relation !== null && $this->type === 'association';
    }

    public function isToManyAssociation(): bool
    {
        return $this->isAssociation() && $this->entity !== null && in_array($this->relation, ['one_to_many', 'many_to_many']);
    }

    public function isToOneAssociation(): bool
    {
        return $this->isAssociation() && $this->entity !== null && in_array($this->relation, ['many_to_one', 'one_to_one']);
    }

    public function isTranslatableField(): bool
    {
        return ($this->type === 'string' || $this->type === 'text') && $this->flags->has('translatable');
    }
}
