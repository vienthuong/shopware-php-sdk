<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Service\Struct;

use Vin\ShopwareSdk\Data\ParseAware;

class KeyValuePair implements ParseAware
{
    private string $key;

    /**
     * @var mixed|null
     */
    private $value;

    /**
     * @param  string  $key
     * @param mixed|null $value
     */
    private function __construct(string $key, $value)
    {
        $this->key = $key;
        $this->value = $value ?? null;
    }

    /**
     * @param  string  $key
     * @param mixed|null $value
     * @return self
     */
    public static function create(string $key, $value): self
    {
        return new self($key, $value);
    }

    public function parse(): array
    {
        return [$this->key => $this->value];
    }

    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @return mixed|null
     */
    public function getValue()
    {
        return $this->value;
    }
}
