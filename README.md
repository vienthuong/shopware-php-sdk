# Shopware 6 PHP SDK

![php](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white) [!["Buy Me A Coffee"](https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png)](https://www.buymeacoffee.com/vinle)

[![GitHub Release](https://img.shields.io/github/v/release/vienthuong/shopware-php-sdk.svg?style=flat)]()
[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)

Shopware PHP SDK is a simple SDK implementation of Shopware 6 APIs. It helps to access the API in an object-oriented way.

If you're familiar with Shopware 6 DAL syntax and how to retrieve it you might see this example is predictable and straightforward

![image](https://i.imgur.com/NyXy2db.png)

## Installation
Install with Composer
```shell
composer require vin-sw/shopware-sdk
```

# The SDK main features:

- Admin API
  - CRUD API 
  - Sync Api
  - Other services  
  - ... (TODO)
  
- Webhook helper
  - Webhook registration
  - Webhook authentication  
  - Webhook receiver

## Usage

More in the examples folder, for integrating the sdk in an App, have a look at this [repository](https://github.com/vienthuong/AppExample)

## Admin Authentication
- Supported 3 grant types, you can create one of these 3 grant type for authentication:

Using Password grant type
```php
$grantType = new PasswordGrantType($username, $password);
```

Using Client credential grant type

```php
$grantType = new ClientCredentialsGrantType($clientId, $clientSecret);
```

Using Refresh token grant type

```php
$grantType = new RefreshTokenGrantType($refreshToken);
```

Or dynamically via

```php
$grantType = GrantType::createFromConfig($config);
```

Check the [authentication](examples/authentication.php) example for the reference.

After having a GrantType object, you can fetch the admin's access token using the AdminAuthenticator

```php
$adminClient = new AdminAuthenticator($grantType, $shopUrl);
$accessToken = $adminClient->fetchAccessToken();
$context = new Context($shopUrl, $accessToken);
```

**Notice:** You might want to store the access token object into the database so you can create the object without request for another access token for every Admin API request.

## Working with Criteria and Repositories

It's pretty identical to what you expected when working with Shopware's core or repositories in the SW administration.

This is an example to retrieve a product that have free shipping
```php
// Create the repository for the entity
$productRepository = RepositoryFactory::create(ProductDefinition::ENTITY_NAME);

// Create the criteria
$criteria = new Criteria();
$criteria->addFilter(new EqualsFilter('shippingFree', true));

// Using this criteria and the context object that you create from authentication step, you can retrieving the result
$products = $productRepository->search($criteria, $context);
```

Each shopware's entity is mapped into Entity and Collection Classes which can be found in [Data/Entity](/src/Data/Entity) so you can easily access their properties when retrieving data from Admin API.

Support methods `get`, `search`, `searchIds`, `create`, `update`, `delete`, `syncDeleted`, `createVersion`, `mergeVersion`, `deleteVersion`, `clone`, `schema`.
Each method requires a [Context](src/Data/Context.php) object

Check [examples/entity-repository.php](/examples/entity-repository.php) for some useful references.

## Working with API Services
- Current supported services: 
  - [InfoService](/src/Service/InfoService.php)
  - [UserService](/src/Service/UserService.php)
  - [StateMachineService](/src/Service/StateMachineService.php)
  - [SyncService](/src/Service/SyncService.php)
  - For other services that does not have a concrete class, use: [AdminActionService](/src/Service/AdminActionService.php)   
  
An ApiService requires a [Context](src/Data/Context.php) object as its first argument. 
Check [examples/sync-service.php](/examples/sync-service.php) or [examples/info-service.php](/examples/info-service.php) for some references.

## Change log
Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Working with Webhook
- Check the integration on our [AppExample](https://github.com/vienthuong/AppExample)

## Contribution
Feels free to create an issue on Github issues page or contact me directly at levienthuong@gmail.com

## Security
If you discover any security related issues, please email levienthuong@gmail.com instead of using the issue tracker.

### Requirements
- ext-curl
- PHP 7.4
- SW >= 6.4

This SDK is mainly dedicated to Shopware 6.4 and onwards, earlier SW application may still be usable without test

## Credits

- [vienthuong][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/vin-sw/shopware-sdk.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[link-packagist]: https://packagist.org/packages/vin-sw/shopware-sdk
[link-downloads]: https://packagist.org/packages/vin-sw/shopware-sdk
[link-author]: https://github.com/vienthuong
[link-contributors]: ../../contributors
