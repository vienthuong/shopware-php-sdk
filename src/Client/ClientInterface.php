<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Client;

use Psr\Http\Client\ClientInterface as HttpClient;
use Psr\Http\Message\ResponseInterface;

interface ClientInterface extends HttpClient
{
    public function get($uri, array $options = []): ResponseInterface;

    public function post($uri, array $options = []): ResponseInterface;

    public function put($uri, array $options = []): ResponseInterface;

    public function patch($uri, array $options = []): ResponseInterface;

    public function delete($uri, array $options = []): ResponseInterface;
}
