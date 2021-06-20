<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\SeoUrlTemplate;

use Vin\ShopwareSdk\Data\Entity\SalesChannel\SalesChannelEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class SeoUrlTemplateEntity extends Entity
{
    public ?string $salesChannelId = null;

    public ?string $entityName = null;

    public ?string $routeName = null;

    public ?string $template = null;

    public ?bool $isValid = null;

    public ?SalesChannelEntity $salesChannel = null;
}
