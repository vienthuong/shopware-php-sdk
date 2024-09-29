<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Webhook;

use Vin\ShopwareSdk\Data\Struct;

class ShopRegistrationResult extends Struct
{
    public function __construct(
        protected string $proof,
        protected Shop $shop
    ) {
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
