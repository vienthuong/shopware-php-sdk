# Shopware 6 PHP SDK

[![Software License][ico-license]](LICENSE.md)

> [!NOTE]
> This package is a fork of the vienthuong Shopware SDK (https://github.com/vienthuong/shopware-php-sdk) but large parts of the code have been rewritten and new concepts were introduced.
>
> A Symfony bundle for this package is also available at [Shopware SDK Bundle][link-symfony-bundle].

Shopware PHP SDK is a SDK implementation of the Shopware 6 API. It helps to access the API in an object-oriented way.

## Installation

The SDK can be installed via composer

```shell
composer require it-bens/shopware-sdk
```

## Main Features

- Admin API
  - CRUD API
  - [Admin Search API][admin-search-api-class-link] (read-equivalent to the Sync API)
  - [Info API][info-api-class-link]
  - [Mail Send API][mail-send-api-class-link]
  - [Media API][media-api-class-link]
  - [Notification API][notification-api-class-link]
  - [Number Range API][number-range-api-class-link]
  - [State Machine API][state-machine-api-class-link]
  - [Sync API][sync-api-class-link] (upserting/deleting multiple entities in a single request)
  - [System Config API][system-config-api-class-link]
  - [User Config API][user-config-api-class-link]
  - [User API][user-api-class-link]

> [!TIP]
> A Symfony bundle for this package is also available at [Shopware SDK Bundle][link-symfony-bundle].

> [!TIP]
> A Laravel 8 package for the forked package is also available at [Laravel Shopware SDK Adapter][link-laravel-package].

## Usage

### Authentication and Context

#### Authentication

All requests to the API (except for the OAuth token request) require a `Context` object. 
The high-level services like the repositories and the API services are building the context by themself via dependency injection. 
They require a `ContextBuilderFactoryInterface` implementation. This factory requires an `AccessTokenProvider` implementation.

There currently two implementations available:
- `WithClientCredentials` for an authentication with client ID and client secret
- `WithUsernameAndPassword` for an authentication with username and password
 
If the application is done with username and password, Shopware will also return a refresh token. While the grant type is implemented, It is currently not used in the SDK.

The dependency injection chain for the `ContextBuilderFactory` looks like this:

`AccessTokenFetcher` --> `AccessTokenProvider` --> `ContextBuilderFactory`

The `AccessTokenFetcher` should be cached with a PSR-16 cache implementation with the `CachedFetcher`. The `SimpleFetcher` can be used directly but this would lead to a new token request for every request.

> [!WARNING]  
> Requesting a new access token for every request will probably lead to a rate limit hit on the Shopware API.

#### Context

The `Context` also contains the Shopware URL and several parameters that will be sent to Shopware as headers:
- Language ID
- Currency ID
- Version ID (for creating multiple versions of an entity)
- Compatibility
- inheritance (whether the entity should inherit from the parent entity)

More headers can be added as well.

The `ContextBuilder` takes care of the `Context` creation via builder pattern.

```php
use Vin\ShopwareSdk\Context\ContextBuilder;
use Vin\ShopwareSdk\Auth\AccessTokenProvider;

$shopwareUrl = 'https://shopware.local';
/** @var AccessTokenProvider $accessTokenProvider */
$contextBuilder = new ContextBuilder($shopwareUrl, $accessTokenProvider);

$contextBuilder->withLanguageId('188208f3609a43d1a493698363fa3cce')
    ->withAdditionalHeader('indexing-behavior', 'disable-indexing');
$context = $contextBuilder->build();
```

### Entity Definitions

The package contains complete sets of Shopwares native entities and their definitions for different Shopware versions.
Every entity has a definition class, an entity class and a collection class. They can be found in the `Vin\ShopwareSdk\Data\Entity` namespace grouped by the Shopware version.

The `DefinitionProvider` collects these definitions via `DefinitionCollectionPopulator` implementations. This package already provides the `WithSdkMapping` implementation. It registers the native entities by using a JSON mapping file.
Users of this package can add other implementations to add or overwrite definitions. This is useful if entities of Shopware plugins should be used. Overwriting the native definition and entity is necessary if the Shopware plugin adds an extension/relation.

The `SchemaProvider` requires a `DefinitionProviderInterface` implementation. It is a convenience class to prevent the construction of the `Schema` objects on every `getSchema` call. The repeated construction lead to a huge performance decrease in the hydration process of the original repository.

### Entity hydration

The hydration is an internal process and will not be discussed too deeply here. The process was nearaly completely rewritten in comparison to the original package. This lead to a huge performance increase for entities with many relations. (I tested it in production with an entity that had about 1000 related entities: hydration took more than 15 minutes with the old process and about 20 seconds with the new one)

The process supports all kinds of searches, relations and extensions. Aggregations are not supported yet.

The hydrated entities contain scalar values, typed relations to other entities, collections for to-many relations and extensions (these are provided by the `Struct` class).

### Entity Repository

An `EntityRepository` requires an `EntityDefinition` a `ContextBuilderFactoryInterface` implementation, an `HttpClientInterace` implementation and a `HydratorInterface` implementation.

The re-addition of a repository factory is planned but not yet implemented.

To simplify the creation and usage of repositories, this package provides a `RepositoryProvider` that requires a `DefinitionProviderInterface` and the dependencies mentioned above.
The provider caches the created repositories. A repository can be requested with the `getRepository` method by its entity name. The entity name can be taken from the entity definition via `getEntityName` method.

#### Criteria

The criteria usage is similar the usage in the Shopware core DAL: [Search Criteria Documentation][shopware-criteria-documentation].

This is an example to retrieve a product that have free shipping:

```php
use Vin\ShopwareSdk\Repository\RepositoryProviderInterface;
use Vin\ShopwareSdk\Data\Entity\v0000\Product\ProductDefinition;
use Vin\ShopwareSdk\Data\Criteria;
use Vin\ShopwareSdk\Data\Filter\EqualsFilter;

/** @var RepositoryProviderInterface $repositoryProvider */
$productRepository = $repositoryProvider->getRepository(ProductDefinition::class);

$criteria = new Criteria();
$criteria->addFilter(new EqualsFilter('shippingFree', true));

$products = $productRepository->search($criteria); // the formerly required context object is created by the repository itself
```

### API Services

The supported APIs were already mentioned in the [Main Features](#main-features) section. Most service calls allow the usage of additional HTTP headers.

## PSR Usage

In order to make this package more compatible with existing code bases, it uses several PSR interfaces instead of concrete implementations.

### PSR-7, PSR-17 and PSR-18

While the original package uses GuzzleHttp, this package works with any implementation of the mentioned interfaces. GuzzleHttp is one of them. But Nyholm and Symfony HTTP clients are working as well.

### PSR-16

The `CachedFetcher` requires a PSR-16 cache implementation. This simple cache is provided by the Symfony cache component. But it can be implemented very easy by yourself, too.

### PSR-20

The clock is used for the token expiration check instead of the native `time` function. This is especially useful for testing.

## Contributing

I am really happy that the software developer community loves Open Source, like I do! ♥

That's why I appreciate every issue that is opened (preferably constructive) and every pull request that provides other or even better code to this package.

You are all breathtaking!

## Special Thanks

Special thanks goes to the original author of the package, [vienthuong][link-author] and the other contributors of the original package.

[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[link-packagist]: https://packagist.org/packages/it-bens/shopware-sdk
[link-downloads]: https://packagist.org/packages/it-bens/shopware-sdk
[link-symfony-bundle]: https://github.com/it-bens/shopware-php-sdk-bundle
[link-laravel-package]: https://github.com/Shape-and-Shift/shopware-laravel-sdk
[link-author]: https://github.com/vienthuong
[link-author-fork]: https://github.com/SpiGAndromeda
[shopware-criteria-documentation]: https://developer.shopware.com/docs/guides/integrations-api/general-concepts/search-criteria.html

[admin-search-api-class-link]: https://github.com/shopware/administration/blob/trunk/Controller/AdminSearchController.php
[info-api-class-link]: https://github.com/shopware/core/blob/trunk/Framework/Api/Controller/InfoController.php
[mail-send-api-class-link]: https://github.com/shopware/core/blob/trunk/Content/MailTemplate/Api/MailActionController.php
[media-api-class-link]: https://github.com/shopware/core/blob/trunk/Content/Media/Api/MediaUploadController.php
[notification-api-class-link]: https://github.com/shopware/administration/blob/trunk/Controller/NotificationController.php
[number-range-api-class-link]: https://github.com/shopware/core/blob/trunk/System/NumberRange/Api/NumberRangeController.php
[state-machine-api-class-link]: https://github.com/shopware/core/blob/trunk/System/StateMachine/Api/StateMachineActionController.php
[sync-api-class-link]: https://github.com/shopware/core/blob/trunk/Framework/Api/Controller/SyncController.php
[system-config-api-class-link]: https://github.com/shopware/core/blob/trunk/System/SystemConfig/Api/SystemConfigController.php
[user-config-api-class-link]: https://github.com/shopware/administration/blob/trunk/Controller/UserConfigController.php
[user-api-class-link]: https://github.com/shopware/core/blob/trunk/Framework/Api/Controller/UserController.php
