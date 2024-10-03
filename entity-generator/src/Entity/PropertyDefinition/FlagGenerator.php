<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkEntityGenerator\Entity\PropertyDefinition;

use Symfony\Component\DependencyInjection\Attribute\AutowireIterator;

final class FlagGenerator implements FlagGeneratorInterface
{
    /**
     * @param iterable<FlagValueGeneratorForFlagAndValue> $flagValueGenerators
     */
    public function __construct(
        #[AutowireIterator(FlagValueGeneratorForFlagAndValue::DI_SERVICE_TAG)]
        private readonly iterable $flagValueGenerators
    ) {
    }

    public function generateFlagConstructionString(string $flag, mixed $value): string
    {
        foreach ($this->flagValueGenerators as $flagValueGenerator) {
            $flagValue = $flagValueGenerator->generateFlagValueForConstructionString($flag, $value);
            if ($flagValue !== null) {
                return sprintf('new Flag(\'%s\', %s)', $flag, $flagValue);
            }
        }

        throw new \RuntimeException(sprintf('No flag value generator found for flag %s', $flag));
    }
}
