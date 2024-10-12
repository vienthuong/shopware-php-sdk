<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6660\MailTemplateTranslation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6660\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\v6660\MailTemplate\MailTemplateEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class MailTemplateTranslationEntity extends Entity
{
    public ?string $senderName = null;
    public ?string $description = null;
    public ?string $subject = null;
    public ?string $contentHtml = null;
    public ?string $contentPlain = null;
    public ?string $mailTemplateId = null;
    public ?string $languageId = null;
    public ?MailTemplateEntity $mailTemplate = null;
    public ?LanguageEntity $language = null;
}
