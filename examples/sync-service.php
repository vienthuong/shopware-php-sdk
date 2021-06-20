<?php

require __DIR__ . '/../vendor/autoload.php';

use Vin\ShopwareSdk\Data\Context;
use \Vin\ShopwareSdk\Service\SyncService;
use Vin\ShopwareSdk\Service\Struct\SyncPayload;
use Vin\ShopwareSdk\Data\Entity\Product\ProductDefinition;
use Vin\ShopwareSdk\Data\Entity\Category\CategoryDefinition;
use Vin\ShopwareSdk\Service\Struct\SyncOperator;

class SyncServiceExample {
    public function execute(): void
    {
        require __DIR__ . '/token.php';

        $context = new Context($config['shop_url'], $accessToken);
        $syncService = new SyncService($context);

        $payload = new SyncPayload();
        $payload->set(ProductDefinition::ENTITY_NAME . '-upsert', new SyncOperator(ProductDefinition::ENTITY_NAME, SyncOperator::UPSERT_OPERATOR, [
            ['id' => '6bfa486a2c4c4e0db32c6a252baf6b3a', 'name' => 'Gorgeous Timo Thiago Perfomancer', 'stock' => 5],
        ]));
        $payload->set(CategoryDefinition::ENTITY_NAME . '-upsert', new SyncOperator(CategoryDefinition::ENTITY_NAME, SyncOperator::UPSERT_OPERATOR, [
            ['id' => '442a39e14f774bf8853f7aa49a123021', 'name' => 'Harry potter book 2', 'active' => true],
        ]));

        $payload->set(CategoryDefinition::ENTITY_NAME . '-delete', new SyncOperator(CategoryDefinition::ENTITY_NAME, SyncOperator::DELETE_OPERATOR, [
            ['id' => '9c43e9029c0047cbb7b9777060f7064f'],
            ['id' => 'd32da4c846544f4b8a63357fe83dd827'],
        ]));

        dump("============================================");
        dump("Sync response");
        $response = $syncService->sync($payload);
        dump($response);
    }
}

$example = new SyncServiceExample();
$example->execute();