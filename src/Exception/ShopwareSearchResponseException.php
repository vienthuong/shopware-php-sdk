<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Exception;

use Vin\ShopwareSdk\Data\Criteria;

class ShopwareSearchResponseException extends ShopwareResponseException
{
    private Criteria $criteria;

    public function __construct($message = "", $code = 0, Criteria $criteria, \Throwable $throwable)
    {
        parent::__construct($message, $code, $throwable);
        $this->criteria = $criteria;
    }

    public function getCriteria(): Criteria
    {
        return $this->criteria;
    }
}
