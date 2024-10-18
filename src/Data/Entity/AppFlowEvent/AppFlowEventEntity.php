<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\AppFlowEvent;

use Vin\ShopwareSdk\Data\Entity\App\AppEntity;
use Vin\ShopwareSdk\Data\Entity\Flow\FlowCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class AppFlowEventEntity extends Entity
{
    public ?string $appId = null;

    public ?string $name = null;

    public ?array $aware = null;

    public ?AppEntity $app = null;

    public ?FlowCollection $flows = null;
}
