<?php

require __DIR__ . '/../vendor/autoload.php';

use Vin\ShopwareSdk\Data\Context;
use \Vin\ShopwareSdk\Service\SyncService;
use Vin\ShopwareSdk\Service\Struct\SyncPayload;
use Vin\ShopwareSdk\Data\Entity\Product\ProductDefinition;
use Vin\ShopwareSdk\Data\Entity\Category\CategoryDefinition;
use Vin\ShopwareSdk\Service\Struct\SyncOperator;
use Vin\ShopwareSdk\Factory\RepositoryFactory;
use Vin\ShopwareSdk\Data\Criteria;

class SyncServiceExample {
    public function execute(): void
    {
        require __DIR__ . '/token.php';

        $context = new Context($config['shop_url'], $accessToken);
        $syncService = new SyncService($context);

        $productRepo = RepositoryFactory::create(ProductDefinition::ENTITY_NAME);
        $productId = $productRepo->searchIds(new Criteria(), $context)->firstId();

        $payload = new SyncPayload();
        $payload->set(ProductDefinition::ENTITY_NAME . '-upsert', new SyncOperator(ProductDefinition::ENTITY_NAME, SyncOperator::UPSERT_OPERATOR, [
            ['id' => $productId, 'name' => 'Gorgeous Timo Thiago Perfomancer', 'stock' => 5],
        ]));

        $payload->set(CategoryDefinition::ENTITY_NAME . '-upsert', new SyncOperator(CategoryDefinition::ENTITY_NAME, SyncOperator::UPSERT_OPERATOR, [
            ['id' => '442a39e14f774bf8853f7aa49a123021', 'name' => 'Harry potter book 2', 'active' => true],
        ]));

        // sync delete using payload
        $payload->set(CategoryDefinition::ENTITY_NAME . '-delete', new SyncOperator(CategoryDefinition::ENTITY_NAME, SyncOperator::DELETE_OPERATOR, [
            ['id' => '9c43e9029c0047cbb7b9777060f7064f'],
            ['id' => 'd32da4c846544f4b8a63357fe83dd827'],
        ]));

        // sync delete using criteria
        $criteria = new Criteria();
        $criteria->addFilter(new \Vin\ShopwareSdk\Data\Filter\EqualsFilter('name', 'Want to delete category'));
        $payload->set(CategoryDefinition::ENTITY_NAME . '-delete', new SyncOperator(
            CategoryDefinition::ENTITY_NAME,
            SyncOperator::DELETE_OPERATOR,
            [],
            $criteria
        ));

        dump("============================================");
        dump("Sync response");
        $response = $syncService->sync($payload);
        dump($response);
    }
}

$example = new SyncServiceExample();
$example->execute();