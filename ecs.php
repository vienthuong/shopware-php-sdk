<?php

declare(strict_types=1);

use PhpCsFixerCustomFixers\Fixer\NoImportFromGlobalNamespaceFixer;
use PhpCsFixerCustomFixers\Fixer\NoSuperfluousConcatenationFixer;
use PhpCsFixerCustomFixers\Fixer\NoUselessCommentFixer;
use PhpCsFixerCustomFixers\Fixer\OperatorLinebreakFixer;
use PhpCsFixerCustomFixers\Fixer\PhpdocNoIncorrectVarAnnotationFixer;
use PhpCsFixerCustomFixers\Fixer\SingleSpaceAfterStatementFixer;
use PhpCsFixer\Fixer\CastNotation\ModernizeTypesCastingFixer;
use PhpCsFixer\Fixer\ClassNotation\ClassAttributesSeparationFixer;
use PhpCsFixer\Fixer\ClassNotation\SelfAccessorFixer;
use PhpCsFixer\Fixer\FunctionNotation\MethodArgumentSpaceFixer;
use PhpCsFixer\Fixer\FunctionNotation\NullableTypeDeclarationForDefaultNullValueFixer;
use PhpCsFixer\Fixer\FunctionNotation\VoidReturnFixer;
use PhpCsFixer\Fixer\LanguageConstruct\ExplicitIndirectVariableFixer;
use PhpCsFixer\Fixer\Operator\ConcatSpaceFixer;
use PhpCsFixer\Fixer\PhpTag\BlankLineAfterOpeningTagFixer;
use PhpCsFixer\Fixer\Phpdoc\GeneralPhpdocAnnotationRemoveFixer;
use PhpCsFixer\Fixer\Phpdoc\NoSuperfluousPhpdocTagsFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocOrderFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocSummaryFixer;
use PhpCsFixer\Fixer\ReturnNotation\NoUselessReturnFixer;
use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use PhpCsFixer\Fixer\StringNotation\ExplicitStringVariableFixer;
use PhpCsFixer\Fixer\Whitespace\CompactNullableTypehintFixer;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->set(ModernizeTypesCastingFixer::class);

    $services->set(ClassAttributesSeparationFixer::class)
        ->call('configure', [['elements' => ['property' => 'one', 'method' => 'one', 'const' => 'one']]]);

    $services->set(MethodArgumentSpaceFixer::class)
        ->call('configure', [['on_multiline' => 'ensure_fully_multiline']]);

    $services->set(NullableTypeDeclarationForDefaultNullValueFixer::class);

    $services->set(VoidReturnFixer::class);

    $services->set(ConcatSpaceFixer::class)
        ->call('configure', [['spacing' => 'one']]);

    $services->set(GeneralPhpdocAnnotationRemoveFixer::class)
        ->call('configure', [['annotations' => ['copyright', 'category']]]);

    $services->set(NoSuperfluousPhpdocTagsFixer::class);

    $services->set(PhpdocOrderFixer::class);

    $services->set(NoUselessReturnFixer::class);

    $services->set(\PhpCsFixer\Fixer\Import\NoUnusedImportsFixer::class);

    $services->set(DeclareStrictTypesFixer::class);

    $services->set(CompactNullableTypehintFixer::class);

    $services->set(NoImportFromGlobalNamespaceFixer::class);

    $services->set(NoSuperfluousConcatenationFixer::class);

    $services->set(NoUselessCommentFixer::class);

    $services->set(OperatorLinebreakFixer::class);

    $services->set(PhpdocNoIncorrectVarAnnotationFixer::class);

    $services->set(SingleSpaceAfterStatementFixer::class);

    $parameters = $containerConfigurator->parameters();

    $parameters->set('skip', [SelfAccessorFixer::class => null, ExplicitIndirectVariableFixer::class => null, BlankLineAfterOpeningTagFixer::class => null, PhpdocSummaryFixer::class => null, ExplicitStringVariableFixer::class => null, 'PhpCsFixerCustomFixers\Fixer\NoUselessCommentFixer' => null, 'PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\AssignmentInConditionSniff' => null]);
};
