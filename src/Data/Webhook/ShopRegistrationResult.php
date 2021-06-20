<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Webhook;

use Vin\ShopwareSdk\Data\Struct;

class ShopRegistrationResult extends Struct
{
    protected string $proof;

    protected Shop $shop;

    public function __construct(string $proof, Shop $shop)
    {
        $this->proof = $proof;
        $this->shop = $shop;
    }

    public function getProof(): string
    {
        return $this->proof;
    }

    public function getShop(): Shop
    {
        return $this->shop;
    }
}
