<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Filter;

use Vin\ShopwareSdk\Data\ParseAware;

abstract class Filter implements ParseAware
{
    public const TYPE_MULTI = 'multi';

    public const TYPE_PREFIX = 'prefix';

    public const TYPE_SUFFIX = 'suffix';

    public const TYPE_CONTAINS = 'contains';

    public const TYPE_EQUALS_ANY = 'equalsAny';

    public const TYPE_RANGE = 'range';

    public const TYPE_EQUALS = 'equals';

    public const TYPE_NOT = 'not';
}
