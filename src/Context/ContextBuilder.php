<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Context;

use Vin\ShopwareSdk\Auth\AccessTokenProvider;
use Vin\ShopwareSdk\Data\Context;
use Vin\ShopwareSdk\Exception\AuthorizationFailedException;

/**
 * @phpstan-import-type Headers from Context
 */
final class ContextBuilder
{
    private ?string $languageId = null;

    private ?string $versionId = null;

    /**
     * @var Headers
     */
    private array $additionalHeaders = [];

    public function __construct(
        private readonly string $shopUrl,
        private readonly AccessTokenProvider $accessTokenProvider
    ) {
    }

    /**
     * @throws AuthorizationFailedException
     */
    public function build(): Context
    {
        $context = new Context($this->shopUrl, $this->accessTokenProvider->getAccessToken());

        if ($this->languageId !== null) {
            $context->languageId = $this->languageId;
        }

        if ($this->versionId !== null) {
            $context->versionId = $this->versionId;
        }

        $context->additionalHeaders = array_merge($context->additionalHeaders, $this->additionalHeaders);

        return $context;
    }

    public function withAdditionalHeader(string $header, bool|float|int|string|null $value): self
    {
        $this->additionalHeaders[$header] = $value;

        return $this;
    }

    /**
     * @param Headers $headers
     */
    public function withAdditionalHeaders(array $headers): self
    {
        $this->additionalHeaders = array_merge($this->additionalHeaders, $headers);

        return $this;
    }

    public function withLanguageId(string $id): self
    {
        $this->languageId = $id;

        return $this;
    }

    public function withVersionId(string $id): self
    {
        $this->versionId = $id;

        return $this;
    }
}
