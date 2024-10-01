<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\MailHeaderFooter;

use Vin\ShopwareSdk\Data\Entity\MailHeaderFooterTranslation\MailHeaderFooterTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\SalesChannel\SalesChannelCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
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
