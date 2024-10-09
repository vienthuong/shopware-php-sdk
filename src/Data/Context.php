<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data;

/**
 * @phpstan-type Headers array<string, bool|float|int|string|null>
 */
class Context
{
    use EndPointTrait;

    public string $apiEndpoint;

    /**
     * @param Headers $additionalHeaders
     */
    public function __construct(
        string $apiEndpoint,
        public AccessToken $accessToken,
        public string $languageId = Defaults::LANGUAGE_SYSTEM,
        public string $currencyId = Defaults::CURRENCY,
        public string $versionId = Defaults::LIVE_VERSION,
        public bool $compatibility = true,
        public bool $inheritance = true,
        public array $additionalHeaders = []
    ) {
        $this->apiEndpoint = $this->removeLastSlashes($apiEndpoint);
    }
}
