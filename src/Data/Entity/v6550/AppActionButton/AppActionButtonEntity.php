<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6550\AppActionButton;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6550\App\AppEntity;
use Vin\ShopwareSdk\Data\Entity\v6550\AppActionButtonTranslation\AppActionButtonTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
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
