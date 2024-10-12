<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6640\Salutation;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6640\Customer\CustomerCollection;
use Vin\ShopwareSdk\Data\Entity\v6640\CustomerAddress\CustomerAddressCollection;
use Vin\ShopwareSdk\Data\Entity\v6640\NewsletterRecipient\NewsletterRecipientCollection;
use Vin\ShopwareSdk\Data\Entity\v6640\OrderAddress\OrderAddressCollection;
use Vin\ShopwareSdk\Data\Entity\v6640\OrderCustomer\OrderCustomerCollection;
use Vin\ShopwareSdk\Data\Entity\v6640\SalutationTranslation\SalutationTranslationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
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
