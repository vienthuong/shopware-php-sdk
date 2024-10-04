<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6583\MailTemplateType;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6583\MailTemplate\MailTemplateCollection;
use Vin\ShopwareSdk\Data\Entity\v6583\MailTemplateTypeTranslation\MailTemplateTypeTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class MailTemplateTypeEntity extends Entity
{
    public ?string $name = null;

    public ?string $technicalName = null;

    public ?array $availableEntities = null;

    public ?MailTemplateTypeTranslationCollection $translations = null;

    public ?MailTemplateCollection $mailTemplates = null;

    public ?array $templateData = null;
}
