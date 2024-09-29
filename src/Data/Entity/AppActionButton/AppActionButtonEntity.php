<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\AppActionButton;

use Vin\ShopwareSdk\Data\Entity\AppActionButtonTranslation\AppActionButtonTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\App\AppEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class AppActionButtonEntity extends Entity
{
    public ?string $entity = null;

    public ?string $view = null;

    public ?string $url = null;

    public ?string $action = null;

    public ?string $label = null;

    public ?AppActionButtonTranslationCollection $translations = null;

    public ?string $appId = null;

    public ?AppEntity $app = null;
}
