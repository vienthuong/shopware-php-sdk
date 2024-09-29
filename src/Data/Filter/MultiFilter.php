<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Filter;

class MultiFilter extends Filter
{
    public const OP_AND = 'and';

    public const OP_OR = 'or';

    public const OP_XOR = 'xor';

    public function __construct(
        public string $operator,
        /**
         * @var Filter[]
         */
        public array $queries
    ) {
    }

    public function parse(): array
    {
        return [
            'type' => self::TYPE_MULTI,
            'operator' => $this->operator,
            'queries' => array_map(fn (Filter $filter) => $filter->parse(), $this->queries),
        ];
    }
}
