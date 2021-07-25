<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\MailTemplateMedia;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(MailTemplateMediaEntity $entity)
 * @method void set(MailTemplateMediaEntity $entity)
 * @method MailTemplateMediaEntity[] getIterator()
 * @method MailTemplateMediaEntity[] getElements()
 * @method MailTemplateMediaEntity|null get(string $key)
 * @method MailTemplateMediaEntity|null first()
 * @method MailTemplateMediaEntity|null last()
 */
class MailTemplateMediaCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return MailTemplateMediaEntity::class;
    }
}
