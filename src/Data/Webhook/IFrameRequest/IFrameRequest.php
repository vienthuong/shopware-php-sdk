<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Webhook\IFrameRequest;

use Vin\ShopwareSdk\Data\Struct;
use Vin\ShopwareSdk\Data\Webhook\ShopRequest;

class IFrameRequest extends Struct
{
    protected string $shopId;

    protected string $shopUrl;

    protected int $timestamp = 0;

    protected string $swVersion;

    protected ?string $shopwareShopSignature;

    protected ?string $contextLanguage;

    protected ?string $userLanguage;

    public function __construct(array $parameters = [])
    {
        $this->shopId = $parameters[ShopRequest::SHOP_ID_REQUEST_PARAMETER];
        $this->shopUrl = $parameters[ShopRequest::SHOP_URL_REQUEST_PARAMETER];
        $this->contextLanguage = $parameters[ShopRequest::SHOP_CONTEXT_LANGUAGE] ?? null;
        $this->userLanguage = $parameters[ShopRequest::SHOP_USER_LANGUAGE] ?? null;
        $this->swVersion = $parameters[ShopRequest::SHOPWARE_VERSION_REQUEST_PARAMETER] ?? 'na';
        $this->timestamp = (int) $parameters[ShopRequest::TIME_STAMP_REQUEST_PARAMETER];
        $this->shopwareShopSignature = $parameters[ShopRequest::SHOP_SIGNATURE_REQUEST_PARAMETER] ?? null;
    }

    public function getShopId(): string
    {
        return $this->shopId;
    }

    public function getShopUrl(): string
    {
        return $this->shopUrl;
    }

    public function getTimestamp(): int
    {
        return $this->timestamp;
    }

    public function getSwVersion(): string
    {
        return $this->swVersion;
    }

    public function getShopwareShopSignature(): ?string
    {
        return $this->shopwareShopSignature;
    }

    public function getContextLanguage(): ?string
    {
        return $this->contextLanguage;
    }

    public function getUserLanguage(): ?string
    {
        return $this->userLanguage;
    }
}
