<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Client;

use Psr\Http\Client\ClientInterface as HttpClient;
use Psr\Http\Message\ResponseInterface;

interface ClientInterface extends HttpClient
{
    public function get(string $uri, array $options = []): ResponseInterface;

    public function post(string $uri, array $options = []): ResponseInterface;

    public function put(string $uri, array $options = []): ResponseInterface;

    public function patch(string $uri, array $options = []): ResponseInterface;

    public function delete(string $uri, array $options = []): ResponseInterface;
}
