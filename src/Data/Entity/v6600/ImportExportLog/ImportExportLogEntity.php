<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Entity\v6600\ImportExportLog;

use Vin\ShopwareSdk\Data\Entity\Entity;
use Vin\ShopwareSdk\Data\Entity\v6600\ImportExportFile\ImportExportFileEntity;
use Vin\ShopwareSdk\Data\Entity\v6600\ImportExportProfile\ImportExportProfileEntity;
use Vin\ShopwareSdk\Data\Entity\v6600\User\UserEntity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ImportExportLogEntity extends Entity
{
    public ?string $activity = null;
    public ?string $state = null;
    public ?int $records = null;
    public ?string $userId = null;
    public ?string $profileId = null;
    public ?string $fileId = null;
    public ?string $invalidRecordsLogId = null;
    public ?string $username = null;
    public ?string $profileName = null;
    public ?array $config = null;
    public ?array $result = null;
    public ?UserEntity $user = null;
    public ?ImportExportProfileEntity $profile = null;
    public ?ImportExportFileEntity $file = null;
    public ?ImportExportLogEntity $invalidRecordsLog = null;
    public ?ImportExportLogEntity $failedImportLog = null;
}
