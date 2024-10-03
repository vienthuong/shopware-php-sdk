<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6560\Tag;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6560\Category\CategoryCollection;
use Vin\ShopwareSdk\Data\Entity\v6560\Customer\CustomerCollection;
use Vin\ShopwareSdk\Data\Entity\v6560\LandingPage\LandingPageCollection;
use Vin\ShopwareSdk\Data\Entity\v6560\Media\MediaCollection;
use Vin\ShopwareSdk\Data\Entity\v6560\NewsletterRecipient\NewsletterRecipientCollection;
use Vin\ShopwareSdk\Data\Entity\v6560\Order\OrderCollection;
use Vin\ShopwareSdk\Data\Entity\v6560\Product\ProductCollection;
use Vin\ShopwareSdk\Data\Entity\v6560\Rule\RuleCollection;
use Vin\ShopwareSdk\Data\Entity\v6560\ShippingMethod\ShippingMethodCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class TagEntity extends Entity
{
    public ?string $name = null;

    public ?ProductCollection $products = null;

    public ?MediaCollection $media = null;

    public ?CategoryCollection $categories = null;

    public ?CustomerCollection $customers = null;

    public ?OrderCollection $orders = null;

    public ?ShippingMethodCollection $shippingMethods = null;

    public ?NewsletterRecipientCollection $newsletterRecipients = null;

    public ?LandingPageCollection $landingPages = null;

    public ?RuleCollection $rules = null;
}
