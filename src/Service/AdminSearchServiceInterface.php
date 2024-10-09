<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Vin\ShopwareSdk\Data\CriteriaCollection;
use Vin\ShopwareSdk\Exception\AuthorizationFailedException;
use Vin\ShopwareSdk\Exception\ShopwareResponseException;
use Vin\ShopwareSdk\Repository\Struct\EntitySearchResultCollection;

interface AdminSearchServiceInterface
{
    /**
     * @throws AuthorizationFailedException
     * @throws ShopwareResponseException
     */
    public function search(CriteriaCollection $criteriaCollection, array $additionalHeaders = []): EntitySearchResultCollection;
}
