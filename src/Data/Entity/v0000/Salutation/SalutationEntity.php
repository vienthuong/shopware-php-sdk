<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\Salutation;

use Vin\ShopwareSdk\Data\Entity\v0000\SalutationTranslation\SalutationTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v0000\Customer\CustomerCollection;
use Vin\ShopwareSdk\Data\Entity\v0000\CustomerAddress\CustomerAddressCollection;
use Vin\ShopwareSdk\Data\Entity\v0000\OrderCustomer\OrderCustomerCollection;
use Vin\ShopwareSdk\Data\Entity\v0000\OrderAddress\OrderAddressCollection;
use Vin\ShopwareSdk\Data\Entity\v0000\NewsletterRecipient\NewsletterRecipientCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class SalutationEntity extends Entity
{
    public ?string $salutationKey = null;

    public ?string $displayName = null;

    public ?string $letterName = null;

    public ?SalutationTranslationCollection $translations = null;

    public ?CustomerCollection $customers = null;

    public ?CustomerAddressCollection $customerAddresses = null;

    public ?OrderCustomerCollection $orderCustomers = null;

    public ?OrderAddressCollection $orderAddresses = null;

    public ?NewsletterRecipientCollection $newsletterRecipients = null;
}
