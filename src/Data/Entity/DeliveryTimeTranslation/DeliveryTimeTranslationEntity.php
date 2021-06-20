<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\DeliveryTimeTranslation;

use Vin\ShopwareSdk\Data\Entity\DeliveryTime\DeliveryTimeEntity;
use Vin\ShopwareSdk\Data\Entity\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class DeliveryTimeTranslationEntity extends Entity
{
    public ?string $name = null;

    public ?string $deliveryTimeId = null;

    public ?string $languageId = null;

    public ?DeliveryTimeEntity $deliveryTime = null;

    public ?LanguageEntity $language = null;
}
