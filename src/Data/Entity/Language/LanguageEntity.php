<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\Language;

use Vin\ShopwareSdk\Data\Entity\Locale\LocaleEntity;
use Vin\ShopwareSdk\Data\Entity\SalesChannel\SalesChannelCollection;
use Vin\ShopwareSdk\Data\Entity\SalesChannelDomain\SalesChannelDomainCollection;
use Vin\ShopwareSdk\Data\Entity\Customer\CustomerCollection;
use Vin\ShopwareSdk\Data\Entity\NewsletterRecipient\NewsletterRecipientCollection;
use Vin\ShopwareSdk\Data\Entity\Order\OrderCollection;
use Vin\ShopwareSdk\Data\Entity\CategoryTranslation\CategoryTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\CountryStateTranslation\CountryStateTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\CountryTranslation\CountryTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\CurrencyTranslation\CurrencyTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\CustomerGroupTranslation\CustomerGroupTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\LocaleTranslation\LocaleTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\MediaTranslation\MediaTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\PaymentMethodTranslation\PaymentMethodTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\ProductManufacturerTranslation\ProductManufacturerTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\ProductTranslation\ProductTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\ShippingMethodTranslation\ShippingMethodTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\UnitTranslation\UnitTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\PropertyGroupTranslation\PropertyGroupTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\PropertyGroupOptionTranslation\PropertyGroupOptionTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\SalesChannelTranslation\SalesChannelTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\SalesChannelTypeTranslation\SalesChannelTypeTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\SalutationTranslation\SalutationTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\PluginTranslation\PluginTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\ProductStreamTranslation\ProductStreamTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\StateMachineTranslation\StateMachineTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\StateMachineStateTranslation\StateMachineStateTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\CmsPageTranslation\CmsPageTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\CmsSlotTranslation\CmsSlotTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\MailTemplateTranslation\MailTemplateTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\MailHeaderFooterTranslation\MailHeaderFooterTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\DocumentTypeTranslation\DocumentTypeTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\NumberRangeTypeTranslation\NumberRangeTypeTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\DeliveryTimeTranslation\DeliveryTimeTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\ProductSearchKeyword\ProductSearchKeywordCollection;
use Vin\ShopwareSdk\Data\Entity\ProductKeywordDictionary\ProductKeywordDictionaryCollection;
use Vin\ShopwareSdk\Data\Entity\MailTemplateTypeTranslation\MailTemplateTypeTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\PromotionTranslation\PromotionTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\NumberRangeTranslation\NumberRangeTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\ProductReview\ProductReviewCollection;
use Vin\ShopwareSdk\Data\Entity\SeoUrl\SeoUrlCollection;
use Vin\ShopwareSdk\Data\Entity\TaxRuleTypeTranslation\TaxRuleTypeTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\ProductCrossSellingTranslation\ProductCrossSellingTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\ImportExportProfileTranslation\ImportExportProfileTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\ProductSortingTranslation\ProductSortingTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\ProductFeatureSetTranslation\ProductFeatureSetTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\AppTranslation\AppTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\AppActionButtonTranslation\AppActionButtonTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\LandingPageTranslation\LandingPageTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\AppCmsBlockTranslation\AppCmsBlockTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\AppScriptConditionTranslation\AppScriptConditionTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\ProductSearchConfig\ProductSearchConfigEntity;
use Vin\ShopwareSdk\Data\Entity\AppFlowActionTranslation\AppFlowActionTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\TaxProviderTranslation\TaxProviderTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\ThemeTranslation\ThemeTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
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
