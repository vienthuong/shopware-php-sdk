<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6550\Document;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6550\DocumentType\DocumentTypeEntity;
use Vin\ShopwareSdk\Data\Entity\v6550\Media\MediaEntity;
use Vin\ShopwareSdk\Data\Entity\v6550\Order\OrderEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class DocumentEntity extends Entity
{
    public ?string $documentTypeId = null;

    public ?string $fileType = null;

    public ?string $referencedDocumentId = null;

    public ?string $orderId = null;

    public ?string $documentMediaFileId = null;

    public ?string $orderVersionId = null;

    public ?array $config = null;

    public ?bool $sent = null;

    public ?bool $static = null;

    public ?string $deepLinkCode = null;

    public ?DocumentTypeEntity $documentType = null;

    public ?OrderEntity $order = null;

    public ?DocumentEntity $referencedDocument = null;

    public ?DocumentCollection $dependentDocuments = null;

    public ?MediaEntity $documentMediaFile = null;
}
