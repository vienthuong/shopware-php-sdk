<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\OrderLineItemDownload;

use Vin\ShopwareSdk\Data\Entity\v0000\OrderLineItem\OrderLineItemEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\Media\MediaEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class OrderLineItemDownloadEntity extends Entity
{
    public ?string $orderLineItemId = null;

    public ?string $orderLineItemVersionId = null;

    public ?string $mediaId = null;

    public ?int $position = null;

    public ?bool $accessGranted = null;

    public ?OrderLineItemEntity $orderLineItem = null;

    public ?MediaEntity $media = null;
}
