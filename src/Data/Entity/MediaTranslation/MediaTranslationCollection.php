<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\MediaTranslation;

use Vin\ShopwareSdk\Data\Entity\EntityCollection;

/**
 * Shopware Collection Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 *
 * @method void add(MediaTranslationEntity $entity)
 * @method void set(MediaTranslationEntity $entity)
 * @method MediaTranslationEntity[] getIterator()
 * @method MediaTranslationEntity[] getElements()
 * @method MediaTranslationEntity|null get(string $key)
 * @method MediaTranslationEntity|null first()
 * @method MediaTranslationEntity|null last()
 */
class MediaTranslationCollection extends EntityCollection
{
    public function getExpectedClass() : string
    {
        return MediaTranslationEntity::class;
    }
}
