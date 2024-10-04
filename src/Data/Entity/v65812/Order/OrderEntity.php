<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v65812\Order;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v65812\Currency\CurrencyEntity;
use Vin\ShopwareSdk\Data\Entity\v65812\Document\DocumentCollection;
use Vin\ShopwareSdk\Data\Entity\v65812\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\v65812\OrderAddress\OrderAddressCollection;
use Vin\ShopwareSdk\Data\Entity\v65812\OrderAddress\OrderAddressEntity;
use Vin\ShopwareSdk\Data\Entity\v65812\OrderCustomer\OrderCustomerEntity;
use Vin\ShopwareSdk\Data\Entity\v65812\OrderDelivery\OrderDeliveryCollection;
use Vin\ShopwareSdk\Data\Entity\v65812\OrderLineItem\OrderLineItemCollection;
use Vin\ShopwareSdk\Data\Entity\v65812\OrderTransaction\OrderTransactionCollection;
use Vin\ShopwareSdk\Data\Entity\v65812\SalesChannel\SalesChannelEntity;
use Vin\ShopwareSdk\Data\Entity\v65812\StateMachineState\StateMachineStateEntity;
use Vin\ShopwareSdk\Data\Entity\v65812\Tag\TagCollection;
use Vin\ShopwareSdk\Data\Entity\v65812\User\UserEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class OrderEntity extends Entity
{
    public ?int $autoIncrement = null;

    public ?string $orderNumber = null;

    public ?string $billingAddressId = null;

    public ?string $billingAddressVersionId = null;

    public ?string $currencyId = null;

    public ?string $languageId = null;

    public ?string $salesChannelId = null;

    public ?\DateTimeInterface $orderDateTime = null;

    public ?\DateTimeInterface $orderDate = null;

    public ?array $price = null;

    public ?float $amountTotal = null;

    public ?float $amountNet = null;

    public ?float $positionPrice = null;

    public ?string $taxStatus = null;

    public ?array $shippingCosts = null;

    public ?float $shippingTotal = null;

    public ?float $currencyFactor = null;

    public ?string $deepLinkCode = null;

    public ?string $affiliateCode = null;

    public ?string $campaignCode = null;

    public ?string $customerComment = null;

    public ?string $source = null;

    public ?string $stateId = null;

    public ?StateMachineStateEntity $stateMachineState = null;

    public ?array $ruleIds = null;

    public ?string $createdById = null;

    public ?string $updatedById = null;

    public ?OrderCustomerEntity $orderCustomer = null;

    public ?CurrencyEntity $currency = null;

    public ?LanguageEntity $language = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?OrderAddressCollection $addresses = null;

    public ?OrderAddressEntity $billingAddress = null;

    public ?OrderDeliveryCollection $deliveries = null;

    public ?OrderLineItemCollection $lineItems = null;

    public ?OrderTransactionCollection $transactions = null;

    public ?DocumentCollection $documents = null;

    public ?TagCollection $tags = null;

    public ?UserEntity $createdBy = null;

    public ?UserEntity $updatedBy = null;

    public ?array $itemRounding = null;

    public ?array $totalRounding = null;
}
