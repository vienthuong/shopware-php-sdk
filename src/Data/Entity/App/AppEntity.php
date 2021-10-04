<?php declare(strict_types=1);
namespace Vin\ShopwareSdk\Data\Entity\App;

use Vin\ShopwareSdk\Data\Entity\AppTranslation\AppTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\Integration\IntegrationEntity;
use Vin\ShopwareSdk\Data\Entity\AclRole\AclRoleEntity;
use Vin\ShopwareSdk\Data\Entity\CustomFieldSet\CustomFieldSetCollection;
use Vin\ShopwareSdk\Data\Entity\AppActionButton\AppActionButtonCollection;
use Vin\ShopwareSdk\Data\Entity\AppTemplate\AppTemplateCollection;
use Vin\ShopwareSdk\Data\Entity\Webhook\WebhookCollection;
use Vin\ShopwareSdk\Data\Entity\AppPaymentMethod\AppPaymentMethodCollection;
use Vin\ShopwareSdk\Data\Entity\AppCmsBlock\AppCmsBlockCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
class AppEntity extends Entity
{
    public ?string $name = null;

    public ?string $path = null;

    public ?string $author = null;

    public ?string $copyright = null;

    public ?string $license = null;

    public ?bool $active = null;

    public ?bool $configurable = null;

    public ?string $privacy = null;

    public ?string $version = null;

    public ?string $iconRaw = null;

    public ?string $icon = null;

    public ?string $appSecret = null;

    public ?array $modules = null;

    public ?array $mainModule = null;

    public ?array $cookies = null;

    public ?AppTranslationCollection $translations = null;

    public ?string $label = null;

    public ?string $description = null;

    public ?string $privacyPolicyExtensions = null;

    public ?string $integrationId = null;

    public ?IntegrationEntity $integration = null;

    public ?string $aclRoleId = null;

    public ?AclRoleEntity $aclRole = null;

    public ?CustomFieldSetCollection $customFieldSets = null;

    public ?AppActionButtonCollection $actionButtons = null;

    public ?AppTemplateCollection $templates = null;

    public ?WebhookCollection $webhooks = null;

    public ?AppPaymentMethodCollection $paymentMethods = null;

    public ?AppCmsBlockCollection $cmsBlocks = null;
}
