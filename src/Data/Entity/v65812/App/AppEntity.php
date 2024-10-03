<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v65812\App;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v65812\AclRole\AclRoleEntity;
use Vin\ShopwareSdk\Data\Entity\v65812\AppActionButton\AppActionButtonCollection;
use Vin\ShopwareSdk\Data\Entity\v65812\AppCmsBlock\AppCmsBlockCollection;
use Vin\ShopwareSdk\Data\Entity\v65812\AppFlowAction\AppFlowActionCollection;
use Vin\ShopwareSdk\Data\Entity\v65812\AppFlowEvent\AppFlowEventCollection;
use Vin\ShopwareSdk\Data\Entity\v65812\AppPaymentMethod\AppPaymentMethodCollection;
use Vin\ShopwareSdk\Data\Entity\v65812\AppScriptCondition\AppScriptConditionCollection;
use Vin\ShopwareSdk\Data\Entity\v65812\AppShippingMethod\AppShippingMethodCollection;
use Vin\ShopwareSdk\Data\Entity\v65812\AppTemplate\AppTemplateCollection;
use Vin\ShopwareSdk\Data\Entity\v65812\AppTranslation\AppTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v65812\CustomFieldSet\CustomFieldSetCollection;
use Vin\ShopwareSdk\Data\Entity\v65812\Integration\IntegrationEntity;
use Vin\ShopwareSdk\Data\Entity\v65812\Script\ScriptCollection;
use Vin\ShopwareSdk\Data\Entity\v65812\TaxProvider\TaxProviderCollection;
use Vin\ShopwareSdk\Data\Entity\v65812\Webhook\WebhookCollection;

/**
 * Shopware Entity Mapping Class.
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

    public ?bool $allowDisable = null;

    public ?string $baseAppUrl = null;

    public ?array $allowedHosts = null;

    public ?int $templateLoadPriority = null;

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

    public ?ScriptCollection $scripts = null;

    public ?WebhookCollection $webhooks = null;

    public ?AppPaymentMethodCollection $paymentMethods = null;

    public ?TaxProviderCollection $taxProviders = null;

    public ?AppScriptConditionCollection $scriptConditions = null;

    public ?AppCmsBlockCollection $cmsBlocks = null;

    public ?AppFlowActionCollection $flowActions = null;

    public ?AppFlowEventCollection $flowEvents = null;

    public ?AppShippingMethodCollection $appShippingMethods = null;
}
