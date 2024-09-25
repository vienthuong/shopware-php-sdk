<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\MailTemplateMedia;

use Vin\ShopwareSdk\Data\Entity\MailTemplate\MailTemplateEntity;
use Vin\ShopwareSdk\Data\Entity\Media\MediaEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class MailTemplateMediaEntity extends Entity
{
    public ?string $mailTemplateId = null;

    public ?string $languageId = null;

    public ?string $mediaId = null;

    public ?int $position = null;

    public ?MailTemplateEntity $mailTemplate = null;

    public ?MediaEntity $media = null;
}
