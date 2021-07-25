<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\SasBlogAuthor;

use Vin\ShopwareSdk\Data\Entity\Media\MediaEntity;
use Vin\ShopwareSdk\Data\Entity\SasBlogAuthorTranslation\SasBlogAuthorTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\SasBlogEntries\SasBlogEntriesCollection;
use Vin\ShopwareSdk\Data\Entity\Salutation\SalutationEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class SasBlogAuthorEntity extends Entity
{
    public ?string $mediaId = null;

    public ?string $salutationId = null;

    public ?string $firstName = null;

    public ?string $lastName = null;

    public ?string $email = null;

    public ?string $displayName = null;

    public ?MediaEntity $media = null;

    public ?string $description = null;

    public ?SasBlogAuthorTranslationCollection $translations = null;

    public ?SasBlogEntriesCollection $blogs = null;

    public ?SalutationEntity $salutation = null;
}
