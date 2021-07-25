<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Client;

trait CreateClientTrait
{
    protected ClientInterface $httpClient;

    public function createHttpClient(array $config = []): ClientInterface
    {
        return $this->httpClient = Client::create($config);
    }

    public function getHttpClient(): ClientInterface
    {
        return $this->httpClient;
    }

    public function setHttpClient(ClientInterface $httpClient): void
    {
        $this->httpClient = $httpClient;
    }
}
