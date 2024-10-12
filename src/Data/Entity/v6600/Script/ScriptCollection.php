<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6600\Script;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void              add(ScriptEntity $entity)
 * @method void              set(ScriptEntity $entity)
 * @method ScriptEntity[]    getIterator()
 * @method ScriptEntity[]    getElements()
 * @method ScriptEntity|null get(string $key)
 * @method ScriptEntity|null first()
 * @method ScriptEntity|null last()
 */
class ScriptCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return ScriptEntity::class;
    }
}
