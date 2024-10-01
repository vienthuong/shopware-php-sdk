<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Response;

use Vin\ShopwareSdk\Data\Webhook\ShopRegistrationResult;

class RegistrationResponse extends SdkResponse
{
    public function __construct(ShopRegistrationResult $result, string $confirmationUrl)
    {
        parent::__construct();

        $json = (string) json_encode([
            'proof' => $result->getProof(),
            'secret' => $result->getShop()
                ->getShopSecret(),
            'confirmation_url' => $confirmationUrl,
        ]);

        $this->getBody()
            ->write($json);
    }
}
