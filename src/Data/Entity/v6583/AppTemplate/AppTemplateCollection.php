<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6583\AppTemplate;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                   add(AppTemplateEntity $entity)
 * @method void                   set(AppTemplateEntity $entity)
 * @method AppTemplateEntity[]    getIterator()
 * @method AppTemplateEntity[]    getElements()
 * @method AppTemplateEntity|null get(string $key)
 * @method AppTemplateEntity|null first()
 * @method AppTemplateEntity|null last()
 */
class AppTemplateCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return AppTemplateEntity::class;
    }
}
