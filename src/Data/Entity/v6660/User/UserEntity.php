<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6660\User;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6660\AclRole\AclRoleCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\Customer\CustomerCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\ImportExportLog\ImportExportLogCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\Locale\LocaleEntity;
use Vin\ShopwareSdk\Data\Entity\v6660\Media\MediaCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\Media\MediaEntity;
use Vin\ShopwareSdk\Data\Entity\v6660\Order\OrderCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\StateMachineHistory\StateMachineHistoryCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\UserAccessKey\UserAccessKeyCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\UserConfig\UserConfigCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\UserRecovery\UserRecoveryEntity;
use Vin\ShopwareSdk\Service\Struct\NotificationCollection;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class UserEntity extends Entity
{
    public ?string $localeId = null;
    public ?string $username = null;
    public ?string $password = null;
    public ?string $firstName = null;
    public ?string $lastName = null;
    public ?string $title = null;
    public ?string $email = null;
    public ?bool $active = null;
    public ?bool $admin = null;
    public ?\DateTimeInterface $lastUpdatedPasswordAt = null;
    public ?string $timeZone = null;
    public ?LocaleEntity $locale = null;
    public ?string $avatarId = null;
    public ?MediaEntity $avatarMedia = null;
    public ?MediaCollection $media = null;
    public ?UserAccessKeyCollection $accessKeys = null;
    public ?UserConfigCollection $configs = null;
    public ?StateMachineHistoryCollection $stateMachineHistoryEntries = null;
    public ?ImportExportLogCollection $importExportLogEntries = null;
    public ?AclRoleCollection $aclRoles = null;
    public ?UserRecoveryEntity $recoveryUser = null;
    public ?string $storeToken = null;
    public ?OrderCollection $createdOrders = null;
    public ?OrderCollection $updatedOrders = null;
    public ?CustomerCollection $createdCustomers = null;
    public ?CustomerCollection $updatedCustomers = null;
    public ?NotificationCollection $createdNotifications = null;
}
