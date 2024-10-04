<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v65812\MailHeaderFooter;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                        add(MailHeaderFooterEntity $entity)
 * @method void                        set(MailHeaderFooterEntity $entity)
 * @method MailHeaderFooterEntity[]    getIterator()
 * @method MailHeaderFooterEntity[]    getElements()
 * @method MailHeaderFooterEntity|null get(string $key)
 * @method MailHeaderFooterEntity|null first()
 * @method MailHeaderFooterEntity|null last()
 */
class MailHeaderFooterCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return MailHeaderFooterEntity::class;
    }
}
