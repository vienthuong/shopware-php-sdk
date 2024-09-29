<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\AppCmsBlock;

use Vin\ShopwareSdk\Data\Entity\AppCmsBlockTranslation\AppCmsBlockTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\App\AppEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class AppCmsBlockEntity extends Entity
{
    public ?string $name = null;

    public ?array $block = null;

    public ?string $template = null;

    public ?string $styles = null;

    public ?string $label = null;

    public ?AppCmsBlockTranslationCollection $translations = null;

    public ?string $appId = null;

    public ?AppEntity $app = null;
}
