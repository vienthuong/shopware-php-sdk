<?php

require __DIR__ . '/../vendor/autoload.php';

use Vin\ShopwareSdk\Data\Context;
use Vin\ShopwareSdk\Data\Entity\Product\ProductDefinition;
use Vin\ShopwareSdk\Exception\ShopwareResponseException;
use Vin\ShopwareSdk\Factory\RepositoryFactory;
use Vin\ShopwareSdk\Data\Criteria;
use Vin\ShopwareSdk\Data\Filter\ContainsFilter;
use Vin\ShopwareSdk\Data\Aggregation\SumAggregation;
use Vin\ShopwareSdk\Data\Entity\Product\ProductEntity;
use Vin\ShopwareSdk\Data\Aggregation\CountAggregation;
use Vin\ShopwareSdk\Data\Entity\Product\ProductCollection;
use Vin\ShopwareSdk\Data\Uuid\Uuid;
use Vin\ShopwareSdk\Data\FieldSorting;

class EntityRepositoryExample {
    public function execute(): void
    {
        require __DIR__ . '/token.php';

        $context = new Context($config['shop_url'], $accessToken);

        $productRepository = RepositoryFactory::create(ProductDefinition::ENTITY_NAME);

        $criteria = new Criteria();
        $criteria->setIds(['0191c287798e734f91be7ae3ceeff481']);
        $criteria->addAssociation('swagDynamicAccessRules');
        $criteria->addAssociation('manufacturer');
        try {
            $productIds = $productRepository->search($criteria, $context);

        } catch (\Throwable $exception) {
            dd($exception);
        }
        dd($productIds);

        // Search api using repositories and criteria
        $criteria = new Criteria();
        $criteria->setLimit(1);
        $criteria->addAssociation('categories');
        $criteria->addSorting(new FieldSorting('name', FieldSorting::DESCENDING));
        $criteria->addFilter(new ContainsFilter('name', 'A'));
        $criteria->addAggregation(new SumAggregation('sumStock', 'stock'));
        $criteria->addAggregation(new CountAggregation('countId', 'id'));

        $products = $productRepository->search($criteria, $context);

        /** @var ProductCollection $productCollection */
        $productCollection = $products->getEntities();

        $productId = $productCollection->first()->id;

        // Repository get
        /** @var ProductEntity $product */
        $product = $productRepository->get($productId, $criteria, $context);

        // Example update and Catch error response
        try {
            $productRepository->update([
                'id' => $productId,
                'name' => 'Edited name' . time(),
                'stock' => 'abc'
            ], $context);
        } catch (ShopwareResponseException $exception) {
            // "errors" => [
            //    0 => [
            //      "code" => "ba785a8c-82cb-4283-967c-3cf342181b40"
            //      "status" => "400"
            //      "detail" => "This value should be of type int."
            //      "template" => "This value should be of type {{ type }}."
            //      "meta" => [
            //        "parameters" => array:2 [
            //          "{{ value }}" => ""abc""
            //          "{{ type }}" => "int"
            //        ]
            //      ]
            //      "source" => [
            //        "pointer" => "/0/stock"
            //      ]
            //    ]
            //  ]
            $exception->getResponse();
        }

            // Example Create
            $productRepository->create([
                'id' => Uuid::randomHex(),
                'name' => 'New Product',
                'taxId' => $product->taxId,
                'price' => $product->price,
                'productNumber' => $product->productNumber . random_int(10, 1000),
                'stock' => $product->stock,
            ], $context);

            // Example Delete
            $productRepository->delete($productId, $context);
    }
}

$example = new EntityRepositoryExample();
$example->execute();