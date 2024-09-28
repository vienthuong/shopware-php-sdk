<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Exception;

use Vin\ShopwareSdk\Data\Criteria;

class ShopwareSearchResponseException extends ShopwareResponseException
{
    public function __construct(string $message, int $code, private readonly Criteria $criteria, \Throwable $throwable)
    {
        parent::__construct($message, $code, $throwable);
    }

    public function getCriteria(): Criteria
    {
        return $this->criteria;
    }
}
