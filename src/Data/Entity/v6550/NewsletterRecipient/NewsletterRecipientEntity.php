<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6550\NewsletterRecipient;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6550\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\v6550\SalesChannel\SalesChannelEntity;
use Vin\ShopwareSdk\Data\Entity\v6550\Salutation\SalutationEntity;
use Vin\ShopwareSdk\Data\Entity\v6550\Tag\TagCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class NewsletterRecipientEntity extends Entity
{
    public ?string $email = null;

    public ?string $title = null;

    public ?string $firstName = null;

    public ?string $lastName = null;

    public ?string $zipCode = null;

    public ?string $city = null;

    public ?string $street = null;

    public ?string $status = null;

    public ?string $hash = null;

    public ?\DateTimeInterface $confirmedAt = null;

    public ?TagCollection $tags = null;

    public ?string $salutationId = null;

    public ?SalutationEntity $salutation = null;

    public ?string $languageId = null;

    public ?LanguageEntity $language = null;

    public ?string $salesChannelId = null;

    public ?SalesChannelEntity $salesChannel = null;
}
