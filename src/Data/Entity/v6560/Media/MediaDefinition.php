<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6560\Media;

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
class MediaDefinition implements EntityDefinition
{
    public const ENTITY_NAME = 'media';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass(): string
    {
        return MediaEntity::class;
    }

    public function getEntityCollection(): string
    {
        return MediaCollection::class;
    }

    public function getSchema(): Schema
    {
        return new Schema('media', new PropertyCollection([
            new Property('id', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('primary_key', 1), new Flag('required', 1)]), []),
            new Property('userId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']])]), []),
            new Property('mediaFolderId', 'uuid', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']])]), []),
            new Property('mimeType', 'string', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('write_protected', [['system']]), new Flag('search_ranking', 80)]), []),
            new Property('fileExtension', 'string', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('write_protected', [['system']])]), []),
            new Property('uploadedAt', 'date', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('write_protected', [['system']])]), []),
            new Property('fileName', 'text', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('write_protected', [['system']]), new Flag('search_ranking', 500)]), []),
            new Property('fileSize', 'int', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('write_protected', [['system']])]), []),
            new Property('mediaTypeRaw', 'blob', new FlagCollection([new Flag('write_protected', [['system']])]), []),
            new Property('metaData', 'json_object', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('write_protected', [['system']])]), [
                'properties' => json_decode('[]', true),
            ]),
            new Property('mediaType', 'json_object', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('write_protected', [[]]), new Flag('runtime', 1)]), [
                'properties' => json_decode('[]', true),
            ]),
            new Property('alt', 'text', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('search_ranking', 250), new Flag('translatable', 1)]), []),
            new Property('title', 'string', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('search_ranking', 500), new Flag('translatable', 1)]), []),
            new Property('url', 'string', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('runtime', 1)]), []),
            new Property('hasFile', 'boolean', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('runtime', 1)]), []),
            new Property('private', 'boolean', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']])]), []),
            new Property('customFields', 'json_object', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('translatable', 1)]), [
                'properties' => json_decode('[]', true),
            ]),
            new Property('thumbnailsRo', 'blob', new FlagCollection([new Flag('computed', 1)]), []),
            new Property('translations', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('cascade_delete', 1), new Flag('required', 1)]), [
                'entity' => 'media_translation',
                'referenceField' => 'mediaId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('tags', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('search_ranking', 0.25)]), [
                'entity' => 'tag',
                'referenceField' => 'id',
                'localField' => 'id',
                'relation' => 'many_to_many',
            ]),
            new Property('thumbnails', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'media_thumbnail',
                'referenceField' => 'mediaId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('user', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']])]), [
                'entity' => 'user',
                'referenceField' => 'id',
                'localField' => 'userId',
                'relation' => 'many_to_one',
            ]),
            new Property('categories', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('set_null_on_delete', 1)]), [
                'entity' => 'category',
                'referenceField' => 'mediaId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('productManufacturers', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('set_null_on_delete', 1)]), [
                'entity' => 'product_manufacturer',
                'referenceField' => 'mediaId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('productMedia', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'product_media',
                'referenceField' => 'mediaId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('productDownloads', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('restrict_delete', 1)]), [
                'entity' => 'product_download',
                'referenceField' => 'mediaId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('orderLineItemDownloads', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('restrict_delete', 1)]), [
                'entity' => 'order_line_item_download',
                'referenceField' => 'mediaId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('avatarUsers', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('set_null_on_delete', 1)]), [
                'entity' => 'user',
                'referenceField' => 'avatarId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('mediaFolder', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']])]), [
                'entity' => 'media_folder',
                'referenceField' => 'id',
                'localField' => 'mediaFolderId',
                'relation' => 'many_to_one',
            ]),
            new Property('propertyGroupOptions', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('set_null_on_delete', 1)]), [
                'entity' => 'property_group_option',
                'referenceField' => 'mediaId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('mailTemplateMedia', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('cascade_delete', 1)]), [
                'entity' => 'mail_template_media',
                'referenceField' => 'mediaId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('documentBaseConfigs', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('set_null_on_delete', 1)]), [
                'entity' => 'document_base_config',
                'referenceField' => 'logoId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('shippingMethods', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('set_null_on_delete', 1)]), [
                'entity' => 'shipping_method',
                'referenceField' => 'mediaId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('paymentMethods', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('set_null_on_delete', 1)]), [
                'entity' => 'payment_method',
                'referenceField' => 'mediaId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('productConfiguratorSettings', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('set_null_on_delete', 1)]), [
                'entity' => 'product_configurator_setting',
                'referenceField' => 'mediaId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('orderLineItems', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('set_null_on_delete', 1)]), [
                'entity' => 'order_line_item',
                'referenceField' => 'coverId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('cmsBlocks', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('restrict_delete', 1)]), [
                'entity' => 'cms_block',
                'referenceField' => 'backgroundMediaId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('cmsSections', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('restrict_delete', 1)]), [
                'entity' => 'cms_section',
                'referenceField' => 'backgroundMediaId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('cmsPages', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('restrict_delete', 1)]), [
                'entity' => 'cms_page',
                'referenceField' => 'previewMediaId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('documents', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('restrict_delete', 1)]), [
                'entity' => 'document',
                'referenceField' => 'documentMediaFileId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('appPaymentMethods', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('set_null_on_delete', 1)]), [
                'entity' => 'app_payment_method',
                'referenceField' => 'originalMediaId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('createdAt', 'date', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('required', 1)]), []),
            new Property('updatedAt', 'date', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']])]), []),
            new Property('themes', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('extension', 1)]), [
                'entity' => 'theme',
                'referenceField' => 'previewMediaId',
                'localField' => 'id',
                'relation' => 'one_to_many',
            ]),
            new Property('themeMedia', 'association', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource']]), new Flag('extension', 1)]), [
                'entity' => 'theme',
                'referenceField' => 'id',
                'localField' => 'id',
                'relation' => 'many_to_many',
            ]),
            new Property('translated', 'json_object', new FlagCollection([new Flag('read_protected', [['Shopware\Core\Framework\Api\Context\AdminApiSource', 'Shopware\Core\Framework\Api\Context\SalesChannelApiSource']]), new Flag('computed', 1), new Flag('runtime', 1)]), [
                'properties' => json_decode('[]', true),
            ]),
        ]));
    }
}
