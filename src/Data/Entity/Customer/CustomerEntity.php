<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\Customer;

use Vin\ShopwareSdk\Data\Entity\Language\LanguageEntity;
use Vin\ShopwareSdk\Data\Entity\PaymentMethod\PaymentMethodEntity;
use Vin\ShopwareSdk\Data\Entity\CustomerAddress\CustomerAddressEntity;
use Vin\ShopwareSdk\Data\Entity\Salutation\SalutationEntity;
use Vin\ShopwareSdk\Data\Entity\CustomerAddress\CustomerAddressCollection;
use Vin\ShopwareSdk\Data\Entity\OrderCustomer\OrderCustomerCollection;
use Vin\ShopwareSdk\Data\Entity\Tag\TagCollection;
use Vin\ShopwareSdk\Data\Entity\Promotion\PromotionCollection;
use Vin\ShopwareSdk\Data\Entity\ProductReview\ProductReviewCollection;
use Vin\ShopwareSdk\Data\Entity\CustomerRecovery\CustomerRecoveryEntity;
use Vin\ShopwareSdk\Data\Entity\CustomerGroup\CustomerGroupEntity;
use Vin\ShopwareSdk\Data\Entity\SalesChannel\SalesChannelEntity;
use Vin\ShopwareSdk\Data\Entity\CustomerWishlist\CustomerWishlistCollection;
use Vin\ShopwareSdk\Data\Entity\User\UserEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class CustomerEntity extends Entity
{
    public ?string $groupId = null;

    public ?string $defaultPaymentMethodId = null;

    public ?string $salesChannelId = null;

    public ?string $languageId = null;

    public ?string $lastPaymentMethodId = null;

    public ?string $defaultBillingAddressId = null;

    public ?string $defaultShippingAddressId = null;

    public ?int $autoIncrement = null;

    public ?string $customerNumber = null;

    public ?string $salutationId = null;

    public ?string $firstName = null;

    public ?string $lastName = null;

    public ?string $company = null;

    public ?string $password = null;

    public ?string $email = null;

    public ?string $title = null;

    public ?array $vatIds = null;

    public ?string $affiliateCode = null;

    public ?string $campaignCode = null;

    public ?bool $active = null;

    public ?bool $doubleOptInRegistration = null;

    public ?\DateTimeInterface$doubleOptInEmailSentDate = null;

    public ?\DateTimeInterface$doubleOptInConfirmDate = null;

    public ?string $hash = null;

    public ?bool $guest = null;

    public ?\DateTimeInterface$firstLogin = null;

    public ?\DateTimeInterface$lastLogin = null;

    public ?array $newsletterSalesChannelIds = null;

    public ?\DateTimeInterface$birthday = null;

    public ?\DateTimeInterface$lastOrderDate = null;

    public ?int $orderCount = null;

    public ?float $orderTotalAmount = null;

    public ?int $reviewCount = null;

    public ?string $legacyPassword = null;

    public ?string $legacyEncoder = null;

    public ?CustomerGroupEntity $group = null;

    public ?PaymentMethodEntity $defaultPaymentMethod = null;

    public ?SalesChannelEntity $salesChannel = null;

    public ?LanguageEntity $language = null;

    public ?PaymentMethodEntity $lastPaymentMethod = null;

    public ?CustomerAddressEntity $defaultBillingAddress = null;

    public ?CustomerAddressEntity $activeBillingAddress = null;

    public ?CustomerAddressEntity $defaultShippingAddress = null;

    public ?CustomerAddressEntity $activeShippingAddress = null;

    public ?SalutationEntity $salutation = null;

    public ?CustomerAddressCollection $addresses = null;

    public ?OrderCustomerCollection $orderCustomers = null;

    public ?TagCollection $tags = null;

    public ?PromotionCollection $promotions = null;

    public ?ProductReviewCollection $productReviews = null;

    public ?CustomerRecoveryEntity $recoveryCustomer = null;

    /**
     * @var mixed
     */
    public string $remoteAddress = null;

    public ?array $tagIds = null;

    public ?string $requestedGroupId = null;

    public ?CustomerGroupEntity $requestedGroup = null;

    public ?string $boundSalesChannelId = null;

    public ?string $accountType = null;

    public ?SalesChannelEntity $boundSalesChannel = null;

    public ?CustomerWishlistCollection $wishlists = null;

    public ?string $createdById = null;

    public ?string $updatedById = null;

    public ?UserEntity $createdBy = null;

    public ?UserEntity $updatedBy = null;
}
