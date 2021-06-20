<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\User;

use Vin\ShopwareSdk\Data\Entity\Locale\LocaleEntity;
use Vin\ShopwareSdk\Data\Entity\Media\MediaEntity;
use Vin\ShopwareSdk\Data\Entity\Media\MediaCollection;
use Vin\ShopwareSdk\Data\Entity\UserAccessKey\UserAccessKeyCollection;
use Vin\ShopwareSdk\Data\Entity\UserConfig\UserConfigCollection;
use Vin\ShopwareSdk\Data\Entity\StateMachineHistory\StateMachineHistoryCollection;
use Vin\ShopwareSdk\Data\Entity\ImportExportLog\ImportExportLogCollection;
use Vin\ShopwareSdk\Data\Entity\AclRole\AclRoleCollection;
use Vin\ShopwareSdk\Data\Entity\UserRecovery\UserRecoveryEntity;
use Vin\ShopwareSdk\Data\Entity\Order\OrderCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class UserEntity extends Entity
{
    public ?string $localeId = null;

    public ?string $avatarId = null;

    public ?string $username = null;

    public ?string $password = null;

    public ?string $firstName = null;

    public ?string $lastName = null;

    public ?string $title = null;

    public ?string $email = null;

    public ?bool $active = null;

    public ?bool $admin = null;

    public ?\DateTimeInterface$lastUpdatedPasswordAt = null;

    public ?LocaleEntity $locale = null;

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
}
