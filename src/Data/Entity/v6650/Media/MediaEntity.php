<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6650\Media;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6650\AppPaymentMethod\AppPaymentMethodCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\AppShippingMethod\AppShippingMethodCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\Category\CategoryCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\CmsBlock\CmsBlockCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\CmsPage\CmsPageCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\CmsSection\CmsSectionCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\Document\DocumentCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\DocumentBaseConfig\DocumentBaseConfigCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\MailTemplateMedia\MailTemplateMediaCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\MediaFolder\MediaFolderEntity;
use Vin\ShopwareSdk\Data\Entity\v6650\MediaThumbnail\MediaThumbnailCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\MediaTranslation\MediaTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\OrderLineItem\OrderLineItemCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\OrderLineItemDownload\OrderLineItemDownloadCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\PaymentMethod\PaymentMethodCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\ProductConfiguratorSetting\ProductConfiguratorSettingCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\ProductDownload\ProductDownloadCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\ProductManufacturer\ProductManufacturerCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\ProductMedia\ProductMediaCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\PropertyGroupOption\PropertyGroupOptionCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\ShippingMethod\ShippingMethodCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\Tag\TagCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\Theme\ThemeCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\User\UserCollection;
use Vin\ShopwareSdk\Data\Entity\v6650\User\UserEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class MediaEntity extends Entity
{
    public ?string $userId = null;
    public ?string $mediaFolderId = null;
    public ?string $mimeType = null;
    public ?string $fileExtension = null;
    public ?\DateTimeInterface $uploadedAt = null;
    public ?string $fileName = null;
    public ?int $fileSize = null;
    public ?string $mediaTypeRaw = null;
    public ?array $metaData = null;
    public ?array $mediaType = null;
    public ?array $config = null;
    public ?string $alt = null;
    public ?string $title = null;
    public ?string $url = null;
    public ?string $path = null;
    public ?bool $hasFile = null;
    public ?bool $private = null;
    public ?string $thumbnailsRo = null;
    public ?MediaTranslationCollection $translations = null;
    public ?TagCollection $tags = null;
    public ?MediaThumbnailCollection $thumbnails = null;
    public ?UserEntity $user = null;
    public ?CategoryCollection $categories = null;
    public ?ProductManufacturerCollection $productManufacturers = null;
    public ?ProductMediaCollection $productMedia = null;
    public ?ProductDownloadCollection $productDownloads = null;
    public ?OrderLineItemDownloadCollection $orderLineItemDownloads = null;
    public ?UserCollection $avatarUsers = null;
    public ?MediaFolderEntity $mediaFolder = null;
    public ?PropertyGroupOptionCollection $propertyGroupOptions = null;
    public ?MailTemplateMediaCollection $mailTemplateMedia = null;
    public ?DocumentBaseConfigCollection $documentBaseConfigs = null;
    public ?ShippingMethodCollection $shippingMethods = null;
    public ?PaymentMethodCollection $paymentMethods = null;
    public ?ProductConfiguratorSettingCollection $productConfiguratorSettings = null;
    public ?OrderLineItemCollection $orderLineItems = null;
    public ?CmsBlockCollection $cmsBlocks = null;
    public ?CmsSectionCollection $cmsSections = null;
    public ?CmsPageCollection $cmsPages = null;
    public ?DocumentCollection $documents = null;
    public ?AppPaymentMethodCollection $appPaymentMethods = null;
    public ?AppShippingMethodCollection $appShippingMethods = null;
    public ?ThemeCollection $themes = null;
    public ?ThemeCollection $themeMedia = null;
}
