<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkTest;

use PHPUnit\Framework\TestCase;
use Vin\ShopwareSdk\Data\Aggregation\AverageAggregation;
use Vin\ShopwareSdk\Data\Aggregation\CountAggregation;
use Vin\ShopwareSdk\Data\Aggregation\FilterAggregation;
use Vin\ShopwareSdk\Data\Aggregation\HistogramAggregation;
use Vin\ShopwareSdk\Data\Aggregation\MaxAggregation;
use Vin\ShopwareSdk\Data\Aggregation\MinAggregation;
use Vin\ShopwareSdk\Data\Aggregation\StatsAggregation;
use Vin\ShopwareSdk\Data\Aggregation\SumAggregation;
use Vin\ShopwareSdk\Data\Aggregation\TermsAggregation;
use Vin\ShopwareSdk\Data\Criteria;
use Vin\ShopwareSdk\Data\FieldSorting;
use Vin\ShopwareSdk\Data\Filter\ContainsFilter;
use Vin\ShopwareSdk\Data\Filter\EqualsAnyFilter;
use Vin\ShopwareSdk\Data\Filter\EqualsFilter;
use Vin\ShopwareSdk\Data\Filter\MultiFilter;
use Vin\ShopwareSdk\Data\Filter\NotFilter;
use Vin\ShopwareSdk\Data\Filter\PrefixFilter;
use Vin\ShopwareSdk\Data\Filter\RangeFilter;
use Vin\ShopwareSdk\Data\Filter\SuffixFilter;
use Vin\ShopwareSdk\Data\ScoreQuery\ScoreQuery;

class CriteriaTest extends TestCase
{
    public function testCriteriaParsed(): void
    {
        $criteria = new Criteria();

        $criteria->setLimit(50);
        $criteria->setPage(5);
        $criteria->addAssociation('assoc1');
        $criteria->addAssociations([
            'assoc2',
            'assoc3'
        ]);
        $criteria->addPostFilter(new EqualsFilter('field1', 'value1'));
        $criteria->addAggregation(new SumAggregation('sum-field-2', 'field-2'));
        $criteria->addAggregation(new CountAggregation('count-field-3', 'field-3'));
        $criteria->addAggregation(new FilterAggregation(
            'filter-field-4',
            [new EqualsFilter('field-4', 'value-4')],
            new SumAggregation('sum-field-2', 'field-2')
        ));
        $criteria->addAggregation(new StatsAggregation('field-stat', 'value-stat'));
        $criteria->addAggregation(new TermsAggregation('field-term', 'value-term'));
        $criteria->addAggregation(new MinAggregation('field-min', 'field-min'));
        $criteria->addAggregation(new MaxAggregation('field-max', 'field-max'));
        $criteria->addAggregation(new AverageAggregation('field-avg', 'field-avg'));
        $criteria->addAggregation(new HistogramAggregation('field-histogram', 'field-histogram', HistogramAggregation::PER_DAY, null));

        $criteria->addSorting(new FieldSorting('field-sort-1', FieldSorting::DESCENDING));
        $criteria->addSorting(new FieldSorting('field-sort-2', FieldSorting::ASCENDING));

        $criteria->addQuery(new ScoreQuery(new EqualsAnyFilter('score-field', ['value-1', 'value-2']), 100, 'score-field'));
        $criteria->addInclude('product-alias', ['name', 'description']);
        $criteria->addGrouping('field-grouping');

        // Add multiple filter
        $criteria->addFilter(new EqualsFilter('field-1', 'value-1'));
        $criteria->addFilter(new EqualsAnyFilter('field-1', ['value-1', 'value-2']));
        $criteria->addFilter(new ContainsFilter('field-1', 'contain-field-1'));
        $criteria->addFilter(new MultiFilter(MultiFilter::OP_AND, [
            new EqualsFilter('description', 'description-value'),
            new EqualsFilter('title', 'title-value'),
        ]));
        $criteria->addFilter(new NotFilter(NotFilter::OP_OR, [
            new EqualsFilter('stock', 0)
        ]));
        $criteria->addFilter(new RangeFilter('stock', [
            RangeFilter::GT => 0,
            RangeFilter::LT => 10,
        ]));
        $criteria->addFilter(new PrefixFilter('title', 'awesome'));
        $criteria->addFilter(new SuffixFilter('description', 'bronze'));
        $criteria->setTotalCountMode(Criteria::TOTAL_COUNT_MODE_EXACT);
        $parsed = $criteria->parse();

        $expectedParsed = [
            "page" => 5,
            "limit" => 50,
            "query" => [
                [
                    "score" => 100,
                    "query" => [
                        "type" => "equalsAny",
                        "field" => "score-field",
                        "value" => "value-1|value-2"
                    ],
                    "scoreField" => "score-field"
                ]
            ],
            "filter" => [
                [
                    "type" => "equals",
                    "field" => "field-1",
                    "value" => "value-1"
                ],
                [
                    "type" => "equalsAny",
                    "field" => "field-1",
                    "value" => "value-1|value-2"
                ],
                [
                    "type" => "contains",
                    "field" => "field-1",
                    "value" => "contain-field-1"
                ],
                [
                    "type" => "multi",
                    "operator" => "and",
                    "queries" => [
                        [
                            "type" => "equals",
                            "field" => "description",
                            "value" => "description-value"
                        ],
                        [
                            "type" => "equals",
                            "field" => "title",
                            "value" => "title-value"
                        ]
                    ]
                ],
                [
                    "type" => "not",
                    "operator" => "or",
                    "queries" => [
                        [
                            "type" => "equals",
                            "field" => "stock",
                            "value" => 0
                        ]
                    ]
                ],
                [
                    "type" => "range",
                    "field" => "stock",
                    "parameters" => [
                        "gt" => 0,
                        "lt" => 10
                    ]
                ],
                [
                    "type" => "prefix",
                    "field" => "title",
                    "value" => "awesome"
                ],
                [
                    "type" => "suffix",
                    "field" => "description",
                    "value" => "bronze"
                ]
            ],
            "post-filter" => [
                [
                    "type" => "equals",
                    "field" => "field1",
                    "value" => "value1"
                ]
            ],
            "sort" => [
                [
                    "field" => "field-sort-1",
                    "order" => "DESC",
                    "naturalSorting" => false
                ],
                [
                    "field" => "field-sort-2",
                    "order" => "ASC",
                    "naturalSorting" => false
                ]
            ],
            "aggregations" => [
                [
                    "type" => "sum",
                    "name" => "sum-field-2",
                    "field" => "field-2"
                ],
                [
                    "type" => "count",
                    "name" => "count-field-3",
                    "field" => "field-3"
                ],
                [
                    "type" => "filter",
                    "name" => "filter-field-4",
                    "filter" => [
                        [
                            "type" => "equals",
                            "field" => "field-4",
                            "value" => "value-4"
                        ]
                    ],
                    "aggregation" => [
                        "type" => "sum",
                        "name" => "sum-field-2",
                        "field" => "field-2"
                    ]
                ],
                [
                    "type" => "stats",
                    "name" => "field-stat",
                    "field" => "value-stat"
                ],
                [
                    "type" => "terms",
                    "name" => "field-term",
                    "field" => "value-term"
                ],
                [
                    "type" => "min",
                    "name" => "field-min",
                    "field" => "field-min"
                ],
                [
                    "type" => "max",
                    "name" => "field-max",
                    "field" => "field-max"
                ],
                [
                    "type" => "avg",
                    "name" => "field-avg",
                    "field" => "field-avg"
                ],
                [
                    "type" => "histogram",
                    "name" => "field-histogram",
                    "field" => "field-histogram",
                    "interval" => 'day'
                ]
            ],
            "grouping" => [
                "field-grouping"
            ],
            "associations" => [
                "assoc1" => [
                    "page" => 1,
                    "limit" => 25,
                    "total-count-mode" => 1
                ],
                "assoc2" => [
                    "page" => 1,
                    "limit" => 25,
                    "total-count-mode" => 1
                ],
                "assoc3" => [
                    "page" => 1,
                    "limit" => 25,
                    "total-count-mode" => 1
                ]
            ],
            "includes" => [
                "product-alias" => [
                    "name",
                    "description"
                ]
            ],
            "total-count-mode" => 1
        ];

        static::assertEquals($parsed, $expectedParsed);
    }
}
