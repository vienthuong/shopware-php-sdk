<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6580\LandingPageTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void                              add(LandingPageTranslationEntity $entity)
 * @method void                              set(LandingPageTranslationEntity $entity)
 * @method LandingPageTranslationEntity[]    getIterator()
 * @method LandingPageTranslationEntity[]    getElements()
 * @method LandingPageTranslationEntity|null get(string $key)
 * @method LandingPageTranslationEntity|null first()
 * @method LandingPageTranslationEntity|null last()
 */
class LandingPageTranslationCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return LandingPageTranslationEntity::class;
    }
}
