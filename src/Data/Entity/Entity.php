<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity;

use Vin\ShopwareSdk\Data\Struct;

class Entity extends Struct
{
    use EntityCustomFieldsTrait;

    public string $_uniqueIdentifier;

    public ?string $versionId;

    protected array $translated = [];

    public ?\DateTimeInterface $createdAt;

    public ?\DateTimeInterface $updatedAt;

    private ?string $_entityName;

    public ?string $apiAlias;

    private const NON_STRUCT_PROPERTY_TYPES = ['string', 'array', 'object', 'resource', 'bool', 'int', 'float', 'double'];

    public string $id;

    public function has(string $property): bool
    {
        return property_exists($this, $property);
    }

    /**
     * @param mixed $value
     */
    public function setProperty(string $property, $value): void
    {
        if (!$this->has($property)) {
            $this->$property = $value;
            return;
        }

        $rp = new \ReflectionProperty($this, $property);

        /** @var \ReflectionNamedType|null $type */
        $type = $rp->getType();

        if ($type === null || ($type->allowsNull() && $value === null)) {
            $this->$property = $value;
            return;
        }

        /** @var class-string $typeName */
        $typeName = $type->getName();

        if (in_array($typeName, self::NON_STRUCT_PROPERTY_TYPES)) {
            $this->$property = $value;
            return;
        }

        if (is_subclass_of($typeName, Struct::class) && ($value instanceof EntityCollection || $value instanceof Entity)) {
            $original = $value;
            $value = $typeName::createFrom($value);

            if ($original instanceof Entity && $value instanceof Entity && $entity = $original->getEntityName()) {
                $value->internalSetEntityName($entity);
            }

            $this->$property = $value;
            return;
        }

        $reflectionClass = new \ReflectionClass($typeName);

        $dummyType = $reflectionClass->isInstantiable() ? new $typeName : null;

        switch (true) {
            case $dummyType instanceof Entity:
                $this->$property = self::createFromArray($typeName, $value);
                break;
            case $dummyType instanceof EntityCollection:
                $value = array_map(function (array $item) use ($dummyType) {
                    return self::createFromArray($dummyType->getExpectedClass(), $item);
                }, $value);
                $this->$property = new $dummyType($value);
                break;
            case $reflectionClass->implementsInterface(\DateTimeInterface::class):
                $this->$property = new \DateTimeImmutable($value);

                break;
            default:
                $this->$property = $value;
        }
    }

    public static function createFromArray(string $expectedEntityClass, array $attributes = []): Entity
    {
        $expectedEntity = new $expectedEntityClass;

        foreach ($attributes as $attributeKey => $attributeValue) {
            $expectedEntity->setProperty($attributeKey, $attributeValue);
        }

        return $expectedEntity;
    }

    public function getTranslated(): array
    {
        return $this->translated;
    }

    /**
     * @return mixed
     */
    public function getTranslation(string $field)
    {
        return $this->translated[$field] ?? null;
    }

    public function setTranslated(array $translated): void
    {
        $this->translated = $translated;
    }

    /**
     * @param mixed $value
     */
    public function addTranslated(string $key, $value): void
    {
        $this->translated[$key] = $value;
    }

    public function internalSetEntityName(string $entityName): self
    {
        $this->_entityName = $entityName;

        return $this;
    }

    public function getEntityName(): ?string
    {
        return $this->_entityName;
    }

    public function assignProperties(array $options): self
    {
        foreach ($options as $key => $value) {
            if ($key === 'id' && property_exists($this, 'id')) {
                $this->id = $value;

                continue;
            }

            try {
                $this->setProperty($key, $value);
            } catch (\Error | \Exception $error) {
                // nth
            }
        }

        return $this;
    }
}
