# Changelog

All notable changes to `shopware-php-sdk` will be documented in this file.

Updates should follow the [Keep a CHANGELOG](http://keepachangelog.com/) principles.

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