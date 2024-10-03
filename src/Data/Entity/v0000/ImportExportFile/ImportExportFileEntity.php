<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v0000\ImportExportFile;

use Vin\ShopwareSdk\Data\Entity\v0000\ImportExportLog\ImportExportLogEntity;
use Vin\ShopwareSdk\Data\Entity\Entity;

/**
 * Shopware Entity Mapping Class
 *
 * This class is generated dynamically following SW entities schema
 */
#[\AllowDynamicProperties]
class ImportExportFileEntity extends Entity
{
    public ?string $originalName = null;

    public ?string $path = null;

    public ?\DateTimeInterface $expireDate = null;

    public ?int $size = null;

    public ?ImportExportLogEntity $log = null;

    public ?string $accessToken = null;
}
