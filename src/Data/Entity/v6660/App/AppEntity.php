<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6660\App;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6660\AclRole\AclRoleEntity;
use Vin\ShopwareSdk\Data\Entity\v6660\AppActionButton\AppActionButtonCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\AppCmsBlock\AppCmsBlockCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\AppFlowAction\AppFlowActionCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\AppFlowEvent\AppFlowEventCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\AppPaymentMethod\AppPaymentMethodCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\AppScriptCondition\AppScriptConditionCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\AppShippingMethod\AppShippingMethodCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\AppTemplate\AppTemplateCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\AppTranslation\AppTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\CustomFieldSet\CustomFieldSetCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\Integration\IntegrationEntity;
use Vin\ShopwareSdk\Data\Entity\v6660\Script\ScriptCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\TaxProvider\TaxProviderCollection;
use Vin\ShopwareSdk\Data\Entity\v6660\Webhook\WebhookCollection;

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
    public ?string $checkoutGatewayUrl = null;
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
