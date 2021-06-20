<?php

require __DIR__ . '/../vendor/autoload.php';

use Vin\ShopwareSdk\Data\Context;
use Vin\ShopwareSdk\Service\InfoService;
use Vin\ShopwareSdk\Service\UserService;

class InfoServiceExample {
    public function execute(): void
    {
        require __DIR__ . '/token.php';

        dump("============================================");
        $context = new Context($config['shop_url'], $accessToken);
        $infoService = new InfoService($context);
        $infoService->refreshSchema();

        dump("Current User:");
        $me = (new UserService($context))->me();
        dump($me);


        // Uncomment to see some examples of InfoService

//        dump($infoService->getSchema('product'));

//        dump("============================================");
//        dump("Events: ");
//
//        dump((new InfoService($context))->getEvents());

//        dump("============================================");
//        dump("Config: ");
//
//        dump((new InfoService($context))->getConfig());

//        dump("============================================");
//        dump("Shopware Version: ");
//
//        dump((new InfoService($context))->getShopwareVersion());

//        dump("============================================");
//        dump("Info: ");
//
//        dump((new InfoService($context))->getInfo());
    }
}

$example = new InfoServiceExample();
$example->execute();