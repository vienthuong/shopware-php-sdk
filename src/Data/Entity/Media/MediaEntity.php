<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\Media;

use Vin\ShopwareSdk\Data\Entity\MediaTranslation\MediaTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\Tag\TagCollection;
use Vin\ShopwareSdk\Data\Entity\MediaThumbnail\MediaThumbnailCollection;
use Vin\ShopwareSdk\Data\Entity\User\UserEntity;
use Vin\ShopwareSdk\Data\Entity\Category\CategoryCollection;
use Vin\ShopwareSdk\Data\Entity\ProductManufacturer\ProductManufacturerCollection;
use Vin\ShopwareSdk\Data\Entity\ProductMedia\ProductMediaCollection;
use Vin\ShopwareSdk\Data\Entity\ProductDownload\ProductDownloadCollection;
use Vin\ShopwareSdk\Data\Entity\OrderLineItemDownload\OrderLineItemDownloadCollection;
use Vin\ShopwareSdk\Data\Entity\User\UserCollection;
use Vin\ShopwareSdk\Data\Entity\MediaFolder\MediaFolderEntity;
use Vin\ShopwareSdk\Data\Entity\PropertyGroupOption\PropertyGroupOptionCollection;
use Vin\ShopwareSdk\Data\Entity\MailTemplateMedia\MailTemplateMediaCollection;
use Vin\ShopwareSdk\Data\Entity\DocumentBaseConfig\DocumentBaseConfigCollection;
use Vin\ShopwareSdk\Data\Entity\ShippingMethod\ShippingMethodCollection;
use Vin\ShopwareSdk\Data\Entity\PaymentMethod\PaymentMethodCollection;
use Vin\ShopwareSdk\Data\Entity\ProductConfiguratorSetting\ProductConfiguratorSettingCollection;
use Vin\ShopwareSdk\Data\Entity\OrderLineItem\OrderLineItemCollection;
use Vin\ShopwareSdk\Data\Entity\CmsBlock\CmsBlockCollection;
use Vin\ShopwareSdk\Data\Entity\CmsSection\CmsSectionCollection;
use Vin\ShopwareSdk\Data\Entity\CmsPage\CmsPageCollection;
use Vin\ShopwareSdk\Data\Entity\Document\DocumentCollection;
use Vin\ShopwareSdk\Data\Entity\AppPaymentMethod\AppPaymentMethodCollection;
use Vin\ShopwareSdk\Data\Entity\Theme\ThemeCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
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

    public ?string $alt = null;

    public ?string $title = null;

    public ?string $url = null;

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

    public ?ThemeCollection $themes = null;

    public ?ThemeCollection $themeMedia = null;
}
