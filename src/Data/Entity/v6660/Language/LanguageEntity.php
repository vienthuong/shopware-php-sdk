<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6660\Language;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6660\AppActionButtonTranslation\AppActionButtonTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\AppCmsBlockTranslation\AppCmsBlockTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\AppFlowActionTranslation\AppFlowActionTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\AppScriptConditionTranslation\AppScriptConditionTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\AppTranslation\AppTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\CategoryTranslation\CategoryTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\CmsPageTranslation\CmsPageTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\CmsSlotTranslation\CmsSlotTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\CountryStateTranslation\CountryStateTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\CountryTranslation\CountryTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\CurrencyTranslation\CurrencyTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\Customer\CustomerCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\CustomerGroupTranslation\CustomerGroupTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\DeliveryTimeTranslation\DeliveryTimeTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\DocumentTypeTranslation\DocumentTypeTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\ImportExportProfileTranslation\ImportExportProfileTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\LandingPageTranslation\LandingPageTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\Locale\LocaleEntity;
use Vin\ShopwareSdk\Data\Entity\v6660\LocaleTranslation\LocaleTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\MailHeaderFooterTranslation\MailHeaderFooterTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\MailTemplateTranslation\MailTemplateTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\MailTemplateTypeTranslation\MailTemplateTypeTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\MediaTranslation\MediaTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\NewsletterRecipient\NewsletterRecipientCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\NumberRangeTranslation\NumberRangeTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\NumberRangeTypeTranslation\NumberRangeTypeTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\Order\OrderCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\PaymentMethodTranslation\PaymentMethodTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\PluginTranslation\PluginTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\ProductCrossSellingTranslation\ProductCrossSellingTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\ProductFeatureSetTranslation\ProductFeatureSetTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\ProductKeywordDictionary\ProductKeywordDictionaryCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\ProductManufacturerTranslation\ProductManufacturerTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\ProductReview\ProductReviewCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\ProductSearchConfig\ProductSearchConfigEntity;
use Vin\ShopwareSdk\Data\Entity\v6660\ProductSearchKeyword\ProductSearchKeywordCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\ProductSortingTranslation\ProductSortingTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\ProductStreamTranslation\ProductStreamTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\ProductTranslation\ProductTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\PromotionTranslation\PromotionTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\PropertyGroupOptionTranslation\PropertyGroupOptionTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\PropertyGroupTranslation\PropertyGroupTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\SalesChannel\SalesChannelCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\SalesChannelDomain\SalesChannelDomainCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\SalesChannelTranslation\SalesChannelTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\SalesChannelTypeTranslation\SalesChannelTypeTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\SalutationTranslation\SalutationTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\SeoUrl\SeoUrlCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\ShippingMethodTranslation\ShippingMethodTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\StateMachineStateTranslation\StateMachineStateTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\StateMachineTranslation\StateMachineTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\TaxProviderTranslation\TaxProviderTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\TaxRuleTypeTranslation\TaxRuleTypeTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\ThemeTranslation\ThemeTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\UnitTranslation\UnitTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class LanguageEntity extends Entity
{
    public ?string $parentId = null;
    public ?string $localeId = null;
    public ?string $translationCodeId = null;
    public ?string $name = null;
    public ?LanguageEntity $parent = null;
    public ?LocaleEntity $locale = null;
    public ?LocaleEntity $translationCode = null;
    public ?LanguageCollection $children = null;
    public ?SalesChannelCollection $salesChannels = null;
    public ?SalesChannelCollection $salesChannelDefaultAssignments = null;
    public ?SalesChannelDomainCollection $salesChannelDomains = null;
    public ?CustomerCollection $customers = null;
    public ?NewsletterRecipientCollection $newsletterRecipients = null;
    public ?OrderCollection $orders = null;
    public ?CategoryTranslationCollection $categoryTranslations = null;
    public ?CountryStateTranslationCollection $countryStateTranslations = null;
    public ?CountryTranslationCollection $countryTranslations = null;
    public ?CurrencyTranslationCollection $currencyTranslations = null;
    public ?CustomerGroupTranslationCollection $customerGroupTranslations = null;
    public ?LocaleTranslationCollection $localeTranslations = null;
    public ?MediaTranslationCollection $mediaTranslations = null;
    public ?PaymentMethodTranslationCollection $paymentMethodTranslations = null;
    public ?ProductManufacturerTranslationCollection $productManufacturerTranslations = null;
    public ?ProductTranslationCollection $productTranslations = null;
    public ?ShippingMethodTranslationCollection $shippingMethodTranslations = null;
    public ?UnitTranslationCollection $unitTranslations = null;
    public ?PropertyGroupTranslationCollection $propertyGroupTranslations = null;
    public ?PropertyGroupOptionTranslationCollection $propertyGroupOptionTranslations = null;
    public ?SalesChannelTranslationCollection $salesChannelTranslations = null;
    public ?SalesChannelTypeTranslationCollection $salesChannelTypeTranslations = null;
    public ?SalutationTranslationCollection $salutationTranslations = null;
    public ?PluginTranslationCollection $pluginTranslations = null;
    public ?ProductStreamTranslationCollection $productStreamTranslations = null;
    public ?StateMachineTranslationCollection $stateMachineTranslations = null;
    public ?StateMachineStateTranslationCollection $stateMachineStateTranslations = null;
    public ?CmsPageTranslationCollection $cmsPageTranslations = null;
    public ?CmsSlotTranslationCollection $cmsSlotTranslations = null;
    public ?MailTemplateTranslationCollection $mailTemplateTranslations = null;
    public ?MailHeaderFooterTranslationCollection $mailHeaderFooterTranslations = null;
    public ?DocumentTypeTranslationCollection $documentTypeTranslations = null;
    public ?NumberRangeTypeTranslationCollection $numberRangeTypeTranslations = null;
    public ?DeliveryTimeTranslationCollection $deliveryTimeTranslations = null;
    public ?ProductSearchKeywordCollection $productSearchKeywords = null;
    public ?ProductKeywordDictionaryCollection $productKeywordDictionaries = null;
    public ?MailTemplateTypeTranslationCollection $mailTemplateTypeTranslations = null;
    public ?PromotionTranslationCollection $promotionTranslations = null;
    public ?NumberRangeTranslationCollection $numberRangeTranslations = null;
    public ?ProductReviewCollection $productReviews = null;
    public ?SeoUrlCollection $seoUrlTranslations = null;
    public ?TaxRuleTypeTranslationCollection $taxRuleTypeTranslations = null;
    public ?ProductCrossSellingTranslationCollection $productCrossSellingTranslations = null;
    public ?ImportExportProfileTranslationCollection $importExportProfileTranslations = null;
    public ?ProductSortingTranslationCollection $productSortingTranslations = null;
    public ?ProductFeatureSetTranslationCollection $productFeatureSetTranslations = null;
    public ?AppTranslationCollection $appTranslations = null;
    public ?AppActionButtonTranslationCollection $actionButtonTranslations = null;
    public ?LandingPageTranslationCollection $landingPageTranslations = null;
    public ?AppCmsBlockTranslationCollection $appCmsBlockTranslations = null;
    public ?AppScriptConditionTranslationCollection $appScriptConditionTranslations = null;
    public ?ProductSearchConfigEntity $productSearchConfig = null;
    public ?AppFlowActionTranslationCollection $appFlowActionTranslations = null;
    public ?TaxProviderTranslationCollection $taxProviderTranslations = null;
    public ?ThemeTranslationCollection $themeTranslations = null;
}
