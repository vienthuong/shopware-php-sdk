<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Factory;

use Vin\ShopwareSdk\Auth\AccessTokenFetcher;
use Vin\ShopwareSdk\Auth\AccessTokenFetcher\SimpleFetcher;
use Vin\ShopwareSdk\Auth\AccessTokenProvider\WithClientCredentials;
use Vin\ShopwareSdk\Auth\AccessTokenProvider\WithUsernameAndPassword;

final class AccessTokenProviderFactory
{
    public static function createProviderWithClientCredentials(string $shopUrl, string $clientId, string $clientSecret, ?AccessTokenFetcher $accessTokenFetcher): WithClientCredentials
    {
        if (! $accessTokenFetcher instanceof AccessTokenFetcher) {
            $accessTokenFetcher = new SimpleFetcher();
        }

        return new WithClientCredentials($shopUrl, $clientId, $clientSecret, $accessTokenFetcher);
    }

    public static function createProviderWithUsernameAndPassword(string $shopUrl, string $username, string $password, ?AccessTokenFetcher $accessTokenFetcher): WithUsernameAndPassword
    {
        if (! $accessTokenFetcher instanceof AccessTokenFetcher) {
            $accessTokenFetcher = new SimpleFetcher();
        }

        return new WithUsernameAndPassword($shopUrl, $username, $password, $accessTokenFetcher);
    }
}
