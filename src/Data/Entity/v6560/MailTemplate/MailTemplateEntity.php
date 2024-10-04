<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6560\MailTemplate;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6560\MailTemplateMedia\MailTemplateMediaCollection;
use Vin\ShopwareSdk\Data\Entity\v6560\MailTemplateTranslation\MailTemplateTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6560\MailTemplateType\MailTemplateTypeEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class MailTemplateEntity extends Entity
{
    public ?string $mailTemplateTypeId = null;

    public ?bool $systemDefault = null;

    public ?string $senderName = null;

    public ?string $description = null;

    public ?string $subject = null;

    public ?string $contentHtml = null;

    public ?string $contentPlain = null;

    public ?MailTemplateTranslationCollection $translations = null;

    public ?MailTemplateTypeEntity $mailTemplateType = null;

    public ?MailTemplateMediaCollection $media = null;
}
