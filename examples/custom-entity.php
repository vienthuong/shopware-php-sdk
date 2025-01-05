<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/MyExampleEntity/MyCustomEntity.php';
require __DIR__ . '/MyExampleEntity/MyCustomDefinition.php';
require __DIR__ . '/MyExampleEntity/MyCustomCollection.php';

use Vin\ShopwareSdk\Data\Context;
use Vin\ShopwareSdk\Factory\RepositoryFactory;
use Vin\ShopwareSdk\Data\Criteria;

// Changed my_custom_entitty to your custom shopware's entity
class MyCustomEntityExample {
    public function execute(): void
    {
        require __DIR__ . '/token.php';

        $context = new Context($config['shop_url'], $accessToken);

        RepositoryFactory::addEntityMapping(['my_custom_entity' => \examples\MyExampleEntity\MyCustomDefinition::class]);

        $myEntityRepository = RepositoryFactory::create(\examples\MyExampleEntity\MyCustomDefinition::ENTITY_NAME);

        $criteria = new Criteria();
        $criteria->setLimit(1);

        $entityIds = $myEntityRepository->search($criteria, $context);

        dd($entityIds);
    }
}

$example = new MyCustomEntityExample();
$example->execute();