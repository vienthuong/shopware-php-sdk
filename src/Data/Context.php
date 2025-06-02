<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data;

/**
 * @property string $languageId
 * @property string $currencyId
 * @property string $versionId
 * @property bool $compatibility
 * @property bool $inheritance
 * @property AccessToken $accessToken
 * @property string $apiEndpoint
 * @property array $additionalHeaders
 */
class Context
{
    use EndPointTrait;

    private string $languageId = Defaults::LANGUAGE_SYSTEM;

    private string $currencyId = Defaults::CURRENCY;

    private string $versionId = Defaults::LIVE_VERSION;

    private bool $compatibility = true;

    private bool $inheritance = true;

    private AccessToken $accessToken;

    private string $apiEndpoint;
    
    private array $additionalHeaders;

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

    function __get(string $name){
        if(!isset($this->{$name})){
            throw new \Exception("Unknown property '{$name}' not found");
        }

        return $this->{$name};
    }
}
