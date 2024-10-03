<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6588\MailHeaderFooter;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6588\MailHeaderFooterTranslation\MailHeaderFooterTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6588\SalesChannel\SalesChannelCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class MailHeaderFooterEntity extends Entity
{
    public ?bool $systemDefault = null;

    public ?string $name = null;

    public ?string $description = null;

    public ?string $headerHtml = null;

    public ?string $headerPlain = null;

    public ?string $footerHtml = null;

    public ?string $footerPlain = null;

    public ?MailHeaderFooterTranslationCollection $translations = null;

    public ?SalesChannelCollection $salesChannels = null;
}
