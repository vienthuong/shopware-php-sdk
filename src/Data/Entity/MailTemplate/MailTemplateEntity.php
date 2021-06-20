<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\MailTemplate;

use Vin\ShopwareSdk\Data\Entity\MailTemplateTranslation\MailTemplateTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\MailTemplateType\MailTemplateTypeEntity;
use Vin\ShopwareSdk\Data\Entity\MailTemplateMedia\MailTemplateMediaCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
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
