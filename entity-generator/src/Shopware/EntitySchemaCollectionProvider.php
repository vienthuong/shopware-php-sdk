<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkEntityGenerator\Shopware;

use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\Filesystem\Path;
use Vin\ShopwareSdk\Data\Schema\SchemaCollection;
use Vin\ShopwareSdk\Service\InfoService;

final class EntitySchemaCollectionProvider implements EntitySchemaCollectionProviderInterface
{
    private readonly InfoService $infoService;

    public function __construct(
        #[Autowire('%kernel.project_dir%')]
        private readonly string $projectDirectory,
        #[Autowire(env: 'SHOPWARE_ENTITY_SCHEMA_FILE_PATH')]
        private readonly string $entitySchemaFilePath
    ) {
        $this->infoService = new InfoService();
    }

    public function getSchemaCollection(): SchemaCollection
    {
        $entitySchemaFileContent = file_get_contents(Path::makeAbsolute($this->entitySchemaFilePath, $this->projectDirectory));
        /** @phpstan-ignore-next-line */
        $entitySchema = json_decode($entitySchemaFileContent, true);

        return $this->infoService->parseSchema($entitySchema);
    }
}
