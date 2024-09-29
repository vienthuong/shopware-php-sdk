<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\Plugin;

use Vin\ShopwareSdk\Data\Entity\PluginTranslation\PluginTranslationCollection;
use Vin\ShopwareSdk\Data\Entity\PaymentMethod\PaymentMethodCollection;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class PluginEntity extends Entity
{
    public ?string $baseClass = null;

    public ?string $name = null;

    public ?string $composerName = null;

    public ?array $autoload = null;

    public ?bool $active = null;

    public ?bool $managedByComposer = null;

    public ?string $path = null;

    public ?string $author = null;

    public ?string $copyright = null;

    public ?string $license = null;

    public ?string $version = null;

    public ?string $upgradeVersion = null;

    public ?\DateTimeInterface $installedAt = null;

    public ?\DateTimeInterface $upgradedAt = null;

    public ?string $iconRaw = null;

    public ?string $icon = null;

    public ?string $label = null;

    public ?string $description = null;

    public ?string $manufacturerLink = null;

    public ?string $supportLink = null;

    public ?array $changelog = null;

    public ?PluginTranslationCollection $translations = null;

    public ?PaymentMethodCollection $paymentMethods = null;
}
