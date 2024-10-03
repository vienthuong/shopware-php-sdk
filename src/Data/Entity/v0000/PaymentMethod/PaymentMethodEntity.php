<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\PaymentMethod;

use Vin\ShopwareSdk\Data\Entity\v0000\PaymentMethodTranslation\PaymentMethodTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v0000\Media\MediaEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\Rule\RuleEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\Plugin\PluginEntity;
use Vin\ShopwareSdk\Data\Entity\v0000\Customer\CustomerCollection;
use Vin\ShopwareSdk\Data\Entity\v0000\OrderTransaction\OrderTransactionCollection;
use Vin\ShopwareSdk\Data\Entity\v0000\SalesChannel\SalesChannelCollection;
use Vin\ShopwareSdk\Data\Entity\v0000\AppPaymentMethod\AppPaymentMethodEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class PaymentMethodEntity extends Entity
{
    public ?string $pluginId = null;

    public ?string $handlerIdentifier = null;

    public ?string $name = null;

    public ?string $distinguishableName = null;

    public ?string $description = null;

    public ?int $position = null;

    public ?bool $active = null;

    public ?bool $afterOrderEnabled = null;

    public ?string $availabilityRuleId = null;

    public ?string $mediaId = null;

    public ?string $formattedHandlerIdentifier = null;

    public ?bool $synchronous = null;

    public ?bool $asynchronous = null;

    public ?bool $prepared = null;

    public ?bool $refundable = null;

    public ?PaymentMethodTranslationCollection $translations = null;

    public ?MediaEntity $media = null;

    public ?RuleEntity $availabilityRule = null;

    public ?SalesChannelCollection $salesChannelDefaultAssignments = null;

    public ?PluginEntity $plugin = null;

    public ?CustomerCollection $customers = null;

    public ?OrderTransactionCollection $orderTransactions = null;

    public ?SalesChannelCollection $salesChannels = null;

    public ?AppPaymentMethodEntity $appPaymentMethod = null;

    public ?string $shortName = null;
}
