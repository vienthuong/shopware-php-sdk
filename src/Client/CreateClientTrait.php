<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Client;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\TransferException;
use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\RequestInterface;

trait CreateClientTrait
{
    protected HttpClient $httpClient;

    public function createHttpClient(array $config = []): HttpClient
    {
        $handlerStack = HandlerStack::create(new CurlHandler());
        $handlerStack->push(Middleware::retry(function (
            $retries,
            RequestInterface $request,
            ?Response $response = null,
            ?TransferException $exception = null
        ) use ($config) {
            $config = array_key_exists('max_attempt', $config) ? $config : ['max_attempt' => 3];

            // Limit the number of retries to 5
            if ($retries >= $config['max_attempt']) {
                return false;
            }

            // Retry connection exceptions
            if ($exception instanceof ConnectException) {
                return true;
            }

            if ($response && $response->getStatusCode() >= 500) {
                // Retry on server errors
                return true;
            }

            return false;
        }, function ($numberOfRetries) use ($config) {
            $config = array_key_exists('sec_before_attempt', $config) ? $config : ['sec_before_attempt' => 2];

            return $config['sec_before_attempt'] * 1000 * $numberOfRetries;
        }));

        return $this->httpClient = new HttpClient([
            'handler' => $handlerStack,
        ]);
    }

    public function getHttpClient(): HttpClient
    {
        return $this->httpClient;
    }

    public function setHttpClient(HttpClient $httpClient): void
    {
        $this->httpClient = $httpClient;
    }
}
