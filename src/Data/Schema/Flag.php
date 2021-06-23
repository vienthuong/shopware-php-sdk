<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Schema;

use Vin\ShopwareSdk\Data\Struct;

class Flag extends Struct
{
    public string $flag;

    /**
     * @var mixed
     */
    public $value;

    /**
     * @param mixed $value
     */
    public function __construct(string $flag, $value)
    {
        $this->flag = $flag;
        $this->value = $value;
    }
}
