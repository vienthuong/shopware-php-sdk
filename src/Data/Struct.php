<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data;

class Struct
{
    /**
     * @var Struct[]
     */
    protected array $extensions = [];

    public static function createFrom(Struct $object)
    {
        try {
            $self = (new \ReflectionClass(static::class))
                ->newInstanceWithoutConstructor();
        } catch (\ReflectionException $exception) {
            throw new \InvalidArgumentException($exception->getMessage());
        }

        foreach (get_object_vars($object) as $property => $value) {
            $self->$property = $value;
        }

        /* @var static $self */
        return $self;
    }

    public function assign(array $options)
    {
        if (array_key_exists('id', $options) && property_exists($this, 'id')) {
            $this->id = $options['id'];

            unset($options['id']);
        }

        foreach ($options as $key => $value) {
            try {
                $this->$key = $value;
            } catch (\Error | \Exception $error) {
                // nth
            }
        }

        return $this;
    }

    /**
     * Adds a new extension struct into the class storage.
     * The passed name is used as unique identifier and has to be stored too.
     */
    public function addExtension(string $name, ?Struct $extension): void
    {
        $this->extensions[$name] = $extension;
    }

    /**
     * @param Struct[] $extensions
     */
    public function addExtensions(array $extensions): void
    {
        foreach ($extensions as $key => $extension) {
            $this->addExtension($key, $extension);
        }
    }

    /**
     * Returns a single extension struct element of this class.
     * The passed name is used as unique identifier.
     */
    public function getExtension(string $name): ?Struct
    {
        return $this->extensions[$name] ?? null;
    }

    public function getExtensionOfType(string $name, string $type): ?Struct
    {
        if ($this->hasExtensionOfType($name, $type)) {
            return $this->getExtension($name);
        }

        return null;
    }

    public function hasExtension(string $name): bool
    {
        return isset($this->extensions[$name]);
    }

    public function hasExtensionOfType(string $name, string $type): bool
    {
        return $this->hasExtension($name) && \get_class($this->getExtension($name)) === $type;
    }

    public function getExtensions(): array
    {
        return $this->extensions;
    }

    public function setExtensions(array $extensions): void
    {
        $this->extensions = $extensions;
    }

    public function removeExtension(string $name): void
    {
        if (isset($this->extensions[$name])) {
            unset($this->extensions[$name]);
        }
    }

    public function jsonSerialize(): array
    {
        $vars = get_object_vars($this);
        $this->converPropertiesToJsonStringRepresentation($vars);

        return $vars;
    }

    protected function converPropertiesToJsonStringRepresentation(array &$array): void
    {
        foreach ($array as &$value) {
            if ($value instanceof \DateTimeInterface) {
                $value = $value->format(\DateTime::RFC3339_EXTENDED);
            }

            if ($value instanceof Struct) {
                $value = $value->jsonSerialize();
            }
        }
    }
}
