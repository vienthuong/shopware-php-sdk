<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Exception;

class ShopwareResponseException extends \Exception
{
    public function getResponse(): array
    {
        try {
            return json_decode($this->message, true);
        } catch (\Throwable $exception) {
            return [
                'message' => $this->message
            ];
        }
    }
}
