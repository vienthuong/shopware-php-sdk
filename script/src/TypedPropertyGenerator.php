<?php declare(strict_types=1);


namespace Vin\Script;

use \Laminas\Code\Generator\PropertyGenerator;
use Laminas\Code\Generator\TypeGenerator;

class TypedPropertyGenerator extends PropertyGenerator
{
    protected ?TypeGenerator $type = null;

    private bool $omitDefaultValue = false;

    public function __construct(
        $name = null,
        $defaultValue = null,
        $type = null,
        $flags = PropertyGenerator::FLAG_PUBLIC
    ) {
        parent::__construct($name, $defaultValue, $flags);

        if (null !== $type) {
            $this->setType($type);
        }
    }

    public function setType(string $type): TypedPropertyGenerator
    {
        $this->type = TypeGenerator::fromTypeString($type);

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type ? (string) $this->type : null;
    }

    public function generate(): string
    {
        $name         = $this->getName();
        $defaultValue = $this->getDefaultValue();

        $output = '';

        if (($docBlock = $this->getDocBlock()) !== null) {
            $docBlock->setIndentation('    ');
            $output .= $docBlock->generate();
        }

        if ($this->isConst()) {
            if ($defaultValue !== null && ! $defaultValue->isValidConstantType()) {
                throw new \RuntimeException(sprintf(
                    'The property %s is said to be '
                    . 'constant but does not have a valid constant value.',
                    $this->name
                ));
            }
            $output .= $this->indentation . $this->getVisibility() . ' const ' . $this->generateTypeHint() . $name . ' = '
                . ($defaultValue !== null ? $defaultValue->generate() : 'null;');

            return $output;
        }

        $output .= $this->indentation . $this->getVisibility() . ($this->isStatic() ? ' static ' : ' ') . $this->generateTypeHint() . '$' . $name;

        if ($this->omitDefaultValue) {
            return $output . ';';
        }

        return $output . ' = ' . ($defaultValue !== null ? $defaultValue->generate() : 'null;');
    }

    private function generateTypeHint(): string
    {
        if (null === $this->type) {
            return '';
        }

        $generated = $this->type->generate();

        if (strpos($generated, \DateTimeInterface::class) !== false) {
            return $generated;
        }

        return str_replace('\\', '', $generated) . ' ';
    }
}
