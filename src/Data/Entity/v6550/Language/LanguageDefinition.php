<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6550\Language;

use Vin\ShopwareSdk\Data\Entity\EntityDefinition;
use Vin\ShopwareSdk\Data\Schema\Flag;
use Vin\ShopwareSdk\Data\Schema\FlagCollection;
use Vin\ShopwareSdk\Data\Schema\Property;
use Vin\ShopwareSdk\Data\Schema\PropertyCollection;
use Vin\ShopwareSdk\Data\Schema\Schema;

/**
 * Shopware Definition Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class LanguageDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'language';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass(): string
    {
        return LanguageEntity::class;
    }

    public function getEntityCollection(): string
    {
        return LanguageCollection::class;
    }

    public function getSchema(): Schema
    {
        return new Schema('language', new PropertyCollection([
            new Property('id', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('primary_key', 1), new Flag('required', 1)]), []),
            new Property('parentId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']])]), []),
            new Property('localeId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('required', 1)]), []),
            new Property('translationCodeId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']])]), []),
            new Property('name', 'string', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('required', 1)]), []),
            new Property('customFields', 'json_object', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']])]), [
                'properties' => json_decode('[]', true),
            ]),
            new Property('parent', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']])]), [
                'entity' => 'language',
                'referenceField' => 'id',
                'localField' => 'parentId',
                'relation' => 'many_to_one',
            ]),
            new Property('locale', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']])]), [
                'entity' => 'locale',
                'referenceField' => 'id',
                'localField' => 'localeId',
                'relation' => 'many_to_one',
            ]),
            new Property('translationCode', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']])]), [
                'entity' => 'locale',
                'referenceField' => 'id',
                'localField' => 'translationCodeId',
                'relation' => 'many_to_one',
            ]),
            new Property('children', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'language',
                'referenceField' => 'parentId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('salesChannels', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']])]), [
                'entity' => 'sales_channel',
                'referenceField' => 'id',
                'localField' => 'id',
                'relation' => 'many_to_many',
            ]),
            new Property('salesChannelDefaultAssignments', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']])]), [
                'entity' => 'sales_channel',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('salesChannelDomains', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('restrict_delete', 1)]), [
                'entity' => 'sales_channel_domain',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('customers', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('restrict_delete', 1)]), [
                'entity' => 'customer',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('newsletterRecipients', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('restrict_delete', 1)]), [
                'entity' => 'newsletter_recipient',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('orders', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('restrict_delete', 1)]), [
                'entity' => 'order',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('categoryTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'category_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('countryStateTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'country_state_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('countryTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'country_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('currencyTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'currency_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('customerGroupTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'customer_group_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('localeTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'locale_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('mediaTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'media_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('paymentMethodTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'payment_method_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('productManufacturerTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'product_manufacturer_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('productTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'product_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('shippingMethodTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'shipping_method_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('unitTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'unit_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('propertyGroupTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'property_group_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('propertyGroupOptionTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'property_group_option_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('salesChannelTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'sales_channel_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('salesChannelTypeTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'sales_channel_type_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('salutationTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'salutation_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('pluginTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'plugin_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('productStreamTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'product_stream_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('stateMachineTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'state_machine_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('stateMachineStateTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'state_machine_state_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('cmsPageTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'cms_page_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('cmsSlotTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'cms_slot_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('mailTemplateTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'mail_template_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('mailHeaderFooterTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'mail_header_footer_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('documentTypeTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'document_type_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('numberRangeTypeTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'number_range_type_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('deliveryTimeTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'delivery_time_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('productSearchKeywords', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'product_search_keyword',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('productKeywordDictionaries', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'product_keyword_dictionary',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('mailTemplateTypeTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'mail_template_type_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('promotionTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'promotion_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('numberRangeTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'number_range_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('productReviews', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'product_review',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('seoUrlTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'seo_url',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('taxRuleTypeTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'tax_rule_type_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('productCrossSellingTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'product_cross_selling_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('importExportProfileTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'import_export_profile_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('productSortingTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'product_sorting_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('productFeatureSetTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'product_feature_set_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('appTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'app_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('actionButtonTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'app_action_button_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('landingPageTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'landing_page_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('appCmsBlockTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'app_cms_block_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('appScriptConditionTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'app_script_condition_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('productSearchConfig', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'product_search_config',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_one',
            ]),
            new Property('appFlowActionTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'app_flow_action_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('taxProviderTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'tax_provider_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('createdAt', 'date', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('required', 1)]), []),
            new Property('updatedAt', 'date', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']])]), []),
            new Property('themeTranslations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1), new Flag('extension', 1)]), [
                'entity' => 'theme_translation',
                'referenceField' => 'languageId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
        ]));
    }
}
