<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6600\MailTemplate;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                    add(MailTemplateEntity $entity)
 * @method void                    set(MailTemplateEntity $entity)
 * @method MailTemplateEntity[]    getIterator()
 * @method MailTemplateEntity[]    getElements()
 * @method MailTemplateEntity|null get(string $key)
 * @method MailTemplateEntity|null first()
 * @method MailTemplateEntity|null last()
 */
class MailTemplateCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return MailTemplateEntity::class;
    }
}
