<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data;

class Context
{
    use EndPointTrait;

    public string $languageId = Defaults::LANGUAGE_SYSTEM;

    public string $currencyId = Defaults::CURRENCY;

    public string $versionId = Defaults::LIVE_VERSION;

    public bool $compatibility = true;

    public bool $inheritance = true;

    public AccessToken $accessToken;

    public string $apiEndpoint;
    
    public array $additionalHeaders;

    public function __construct(
        string $apiEndpoint,
        AccessToken $accessToken,
        string $languageId = Defaults::LANGUAGE_SYSTEM,
        string $currencyId = Defaults::CURRENCY,
        string $versionId = Defaults::LIVE_VERSION,
        bool $compatibility = true,
        bool $inheritance = true,
        array $additionalHeaders = []
    ) {
        $this->languageId = $languageId;
        $this->currencyId = $currencyId;
        $this->versionId = $versionId;
        $this->compatibility = $compatibility;
        $this->inheritance = $inheritance;
        $this->accessToken = $accessToken;
        $this->apiEndpoint = $this->removeLastSlashes($apiEndpoint);
        $this->additionalHeaders = $additionalHeaders;
    }
}
