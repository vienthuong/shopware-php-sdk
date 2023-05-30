# Changelog

All notable changes to `shopware-php-sdk` will be documented in this file.

Updates should follow the [Keep a CHANGELOG](http://keepachangelog.com/) principles.

### 2.0.0
- Updated the entity-schema for Shopware version 6.5

### 1.7.3
- [Fix Schema caching](https://github.com/vienthuong/shopware-php-sdk/pull/62)
- [Loosen Guzzle requirement](https://github.com/vienthuong/shopware-php-sdk/pull/63)

### 1.7.2
- [Fix EntityCollection is returned for empty result](https://github.com/vienthuong/shopware-php-sdk/issues/58)
- [Fix EntityRepository::searchIds does not throw ShopwareSearchResponseException](https://github.com/vienthuong/shopware-php-sdk/issues/49)

### 1.7.1
- guzzlehttp/guzzle updated to version 7.5

### 1.7.0
- PHP 8.1 compatibility

### 1.6.0
- [Use composition instead of Traits for entity hydration logic](https://github.com/vienthuong/shopware-php-sdk/issues/46)
- [Removed cache for hydrated entities](https://github.com/vienthuong/shopware-php-sdk/issues/46)

### 1.5.1
- [Add property getter for Entity](https://github.com/vienthuong/shopware-php-sdk/pull/43)
- [Introduce new admin api gateway `Vin\ShopwareSdk\Service\MediaService` to work with media endpoint and media-service in examples](https://github.com/vienthuong/shopware-php-sdk/issues/39)
- [Fixed AdminActionService to allow uppercase and lowercase http method](https://github.com/vienthuong/shopware-php-sdk/issues/35)
- [Fixed AdminActionService to allow uppercase and lowercase http method](https://github.com/vienthuong/shopware-php-sdk/issues/35)
- [Fixed AdminActionService to accept non-array data as third argument](https://github.com/vienthuong/shopware-php-sdk/issues/38)

### 1.5.0
- Updated Latest DAL Classes
- Continue to hydrate remaining relationships event if schema is partly defined
- Give the possibility to reload default mapping
- [Add internal cache for EntityHydrator's schema to avoid call getSchema multiple times with CustomDefinition](https://github.com/vienthuong/shopware-php-sdk/issues/35)

### 1.4.0
- Updated Latest DAL Classes
- Added NotificationService to allow sending/getting notification from external app (success/error/warning/info)
- Added UserConfigService to getting/saving admin's config
- Added AdminSearchService to search for multiple entities as one request
- Added more service's examples
- Deprecated SystemConfigService::saveConfiguration, use SystemConfigService::save instead
- Deprecated SystemConfigService::batchSaveConfiguration, use SystemConfigService::batchSave instead

### 1.3.3
- [Use correct sync operator for syncDeleted](https://github.com/vienthuong/shopware-php-sdk/pull/16)
- [Remove extends HttpClient from GuzzleClient](https://github.com/vienthuong/shopware-php-sdk/issues/5)
- Added `Script` entity definition

### 1.3.2
- Shopware 6.5 compatibility
- `WebhookAuthenticator::authenticateGetRequest` now also consider `sw-context-language` and `sw-user-language`
- Added properties `userLanguage` and `contextLanguage` into `IFrameRequest`

### 1.3.1
- [Hydrate Bug fixed](https://github.com/vienthuong/shopware-php-sdk/issues/10)
- Update Latest DAL Classes

### 1.3.0
- PHP 8 compatibility

### 1.2.2
- Added SystemConfigService, MailSendService
- Changed ApiService constructor do not require a $context object, using setContext method instead
- Fix some minor bugs

### 1.2.1
- Added RepositoryFactory::createFromDefinition that allow to generate the repository from an EntityDefinition 

### 1.2.0
- Added ActionButtonResponse classes that can be return directly when receive an action button request
- Added RegistrationResponse that can be return directly when receive an app register request
- Updated Docs for App

### 1.1.0
- Added plugin custom Definition at runtime
- Updated all latest entities from SW 6.4.2.1  
- Better Collection generator method annotation
- HttpClient decoupling
- Added IframeRequest DTO and ShopRequest constant

### 1.0.0
- Package initial structure
- First release
