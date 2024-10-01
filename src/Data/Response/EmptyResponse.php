<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Response;

class EmptyResponse extends SdkResponse
{
    public function __construct()
    {
        parent::__construct(204);
    }
}
