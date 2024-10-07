<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Context;

interface ContextBuilderFactoryInterface
{
    public function createContextBuilder(): ContextBuilder;
}
