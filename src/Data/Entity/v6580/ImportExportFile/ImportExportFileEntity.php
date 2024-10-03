<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6580\ImportExportFile;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6580\ImportExportLog\ImportExportLogEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ImportExportFileEntity extends Entity
{
    public ?string $originalName = null;

    public ?string $path = null;

    public ?\DateTimeInterface $expireDate = null;

    public ?int $size = null;

    public ?ImportExportLogEntity $log = null;

    public ?string $accessToken = null;
}
