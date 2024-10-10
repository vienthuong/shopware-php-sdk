<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Http\Struct;

enum MediaType: string
{
    case NONE = '';

    case APPLICATION_JSON = 'application/json';

    case APPLICATION_JSON_API = 'application/vnd.api+json';
}
