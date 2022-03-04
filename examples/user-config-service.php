<?php

require __DIR__ . '/../vendor/autoload.php';

use Vin\ShopwareSdk\Data\Context;
use Vin\ShopwareSdk\Service\UserConfigService;
use Vin\ShopwareSdk\Service\Struct\KeyValuePair;
use Vin\ShopwareSdk\Service\Struct\KeyValuePairs;

class UserConfigServiceExample {
    public function execute(): void
    {
        require __DIR__ . '/token.php';

        $context = new Context($config['shop_url'], $accessToken);
        $service = new UserConfigService($context);

        $config1 = KeyValuePair::create('my.config.key1', ['test' => 'my.config.value1']);
        $config2 = KeyValuePair::create('my.config.key2', ['another' => 'my.config.value2']);

        $pairs = new KeyValuePairs([$config1, $config2]);

        $service->saveConfigMe($pairs);

        $configs = $service->getConfigMe($pairs->getKeys());
        dump($configs);
    }
}

$example = new UserConfigServiceExample();
$example->execute();