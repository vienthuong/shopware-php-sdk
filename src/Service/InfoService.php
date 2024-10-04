<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Service;

use Vin\ShopwareSdk\Data\Schema\Schema;
use Vin\ShopwareSdk\Data\Schema\SchemaCollection;

class InfoService extends ApiService
{
    private const SCHEMA_PATH = '/api/_info/entity-schema.json';

    private const EVENTS_PATH = '/api/_info/events.json';

    private const CONFIG_PATH = '/api/_info/config';

    private const VERSION_PATH = '/api/_info/version';

    private const INFO_PATH = '/api/_info/openapi3.json';

    private const OPEN_API_SCHEMA = '/api/_info/open-api-schema.json';

    private const SCHEMA_FILE_PATH = __DIR__ . '/../Resources/entity-schema_0.0.0.0.json';

    private ?SchemaCollection $schema = null;

    private array $cache = [];

    public function getInfo(): ApiResponse
    {
        $url = $this->getFullUrl(self::INFO_PATH);

        return $this->get($url);
    }

    public function getOpenApiSchema(): ApiResponse
    {
        $url = $this->getFullUrl(self::OPEN_API_SCHEMA);

        return $this->get($url);
    }

    public function getEvents(): ApiResponse
    {
        $url = $this->getFullUrl(self::EVENTS_PATH);

        return $this->get($url);
    }

    public function getConfig(): ApiResponse
    {
        $url = $this->getFullUrl(self::CONFIG_PATH);

        return $this->get($url);
    }

    public function getShopwareVersion(): string
    {
        $url = $this->getFullUrl(self::VERSION_PATH);

        return $this->get($url)
            ->getContents()['version'];
    }

    public function getSchema(string $entity): ?Schema
    {
        if (array_key_exists($entity, $this->cache)) {
            return $this->cache[$entity];
        }

        if ($this->schema !== null) {
            return $this->schema->get($entity);
        }

        /** @var string|false $localSchema */
        $localSchema = \file_get_contents(self::SCHEMA_FILE_PATH);

        $this->schema = $localSchema === false ? $this->refreshSchema() : $this->parseSchema(self::handleResponse($localSchema, [
            'content-type' => 'application/vnd.api+json',
        ]));

        return $this->cache[$entity] = $this->schema->get($entity);
    }

    public function refreshSchema(bool $persist = true): SchemaCollection
    {
        $this->cache = [];
        $this->schema = null;

        $rawSchema = $this->fetchRawSchema();

        if ($persist) {
            \file_put_contents(self::SCHEMA_FILE_PATH, json_encode($rawSchema->getContents()));
        }

        $schemas = $this->parseSchema($rawSchema->getContents());

        return $schemas;
    }

    public function fetchRawSchema(): ApiResponse
    {
        $url = $this->getFullUrl(self::SCHEMA_PATH);

        return $this->get($url);
    }

    public function parseSchema(array $schema): SchemaCollection
    {
        $schemaCollection = [];

        foreach ($schema as $keySchema => $item) {
            $schemaCollection[$keySchema] = Schema::createFromRaw($item['entity'], $item['properties']);
        }

        return new SchemaCollection($schemaCollection);
    }
}
