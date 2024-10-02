<?php

declare(strict_types=1);

namespace Vin\ShopwareSdkEntityGenerator\Entity\PropertyDefinition;

final class PropertiesGenerator implements PropertiesGeneratorInterface
{
    public function generatePropertiesArrayString(?string $entity, ?string $referenceField, ?string $localField, ?string $relation, ?array $properties, int $arrayValueIndentationWhitespaceCount): string
    {
        $propertiesArrayString = '[]';
        if ($entity !== null || $referenceField !== null || $localField !== null || $relation !== null || $properties !== null) {
            $propertiesArrayString = '[' . PHP_EOL;
            if (is_string($entity)) {
                $propertiesArrayString .= str_repeat(' ', $arrayValueIndentationWhitespaceCount);
                $propertiesArrayString .= sprintf('\'entity\' => \'%s\',', $entity) . PHP_EOL;
            }
            if (is_string($referenceField)) {
                $propertiesArrayString .= str_repeat(' ', $arrayValueIndentationWhitespaceCount);
                $propertiesArrayString .= sprintf('\'referenceField\' => \'%s\',', $referenceField) . PHP_EOL;
            }
            if (is_string($localField)) {
                $propertiesArrayString .= str_repeat(' ', $arrayValueIndentationWhitespaceCount);
                $propertiesArrayString .= sprintf('\'localField\' => \'%s\',', $localField) . PHP_EOL;
            }
            if (is_string($relation)) {
                $propertiesArrayString .= str_repeat(' ', $arrayValueIndentationWhitespaceCount);
                $propertiesArrayString .= sprintf('\'relation\' => \'%s\',', $relation) . PHP_EOL;
            }
            if (is_array($properties)) {
                $propertiesArrayString .= str_repeat(' ', $arrayValueIndentationWhitespaceCount);
                $propertiesArrayString .= sprintf('\'properties\' => json_decode(\'%s\', true),', json_encode($properties)) . PHP_EOL;
            }
            $propertiesArrayString .= str_repeat(' ', $arrayValueIndentationWhitespaceCount - 4);
            $propertiesArrayString .= ']';
        }

        return $propertiesArrayString;
    }
}
