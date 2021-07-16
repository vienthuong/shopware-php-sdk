<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Repository\Struct;

use Vin\ShopwareSdk\Data\Struct;

class VersionResponse extends Struct
{
    protected string $versionId;

    protected ?string $versionName;

    protected string $id;

    protected string $entity;

    public function __construct(array $response)
    {
        $this->versionId = $response['versionId'];
        $this->versionName = $response['versionName'];
        $this->id = $response['id'];
        $this->entity = $response['entity'];
    }

    public function getEntity(): string
    {
        return $this->entity;
    }

    public function setEntity(string $entity): void
    {
        $this->entity = $entity;
    }

    public function getVersionId(): string
    {
        return $this->versionId;
    }

    public function setVersionId(string $versionId): void
    {
        $this->versionId = $versionId;
    }

    public function getVersionName(): ?string
    {
        return $this->versionName;
    }

    public function setVersionName(?string $versionName): void
    {
        $this->versionName = $versionName;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }
}
