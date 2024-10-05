<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Vin\ShopwareSdk\Exception\ShopwareResponseException;
use Vin\ShopwareSdk\Service\Struct\KeyValuePairs;

interface AdminSearchServiceInterface
{
    /**
     * @throws ShopwareResponseException
     */
    public function search(KeyValuePairs $criteriaCollection, array $additionalHeaders = []): KeyValuePairs;
}
