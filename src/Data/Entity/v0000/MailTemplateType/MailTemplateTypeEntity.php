<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\MailTemplateType;

use Vin\ShopwareSdk\Data\Entity\v0000\MailTemplateTypeTranslation\MailTemplateTypeTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v0000\MailTemplate\MailTemplateCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class MailTemplateTypeEntity extends Entity
{
    public ?string $name = null;

    public ?string $technicalName = null;

    public ?array $availableEntities = null;

    public ?MailTemplateTypeTranslationCollection $translations = null;

    public ?MailTemplateCollection $mailTemplates = null;

    public ?array $templateData = null;
}
