<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6588\MailTemplateMedia;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6588\MailTemplate\MailTemplateEntity;
use Vin\ShopwareSdk\Data\Entity\v6588\Media\MediaEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class MailTemplateMediaEntity extends Entity
{
    public ?string $mailTemplateId = null;

    public ?string $languageId = null;

    public ?string $mediaId = null;

    public ?int $position = null;

    public ?MailTemplateEntity $mailTemplate = null;

    public ?MediaEntity $media = null;
}
