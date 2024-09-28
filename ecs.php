<?php

declare(strict_types=1);

use PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\AssignmentInConditionSniff;
use PhpCsFixerCustomFixers\Fixer\NoImportFromGlobalNamespaceFixer;
use PhpCsFixerCustomFixers\Fixer\NoSuperfluousConcatenationFixer;
use PhpCsFixerCustomFixers\Fixer\NoUselessCommentFixer;
use PhpCsFixerCustomFixers\Fixer\PhpdocNoIncorrectVarAnnotationFixer;
use PhpCsFixerCustomFixers\Fixer\SingleSpaceAfterStatementFixer;
use PhpCsFixer\Fixer\CastNotation\ModernizeTypesCastingFixer;
use PhpCsFixer\Fixer\ClassNotation\ClassAttributesSeparationFixer;
use PhpCsFixer\Fixer\ClassNotation\SelfAccessorFixer;
use PhpCsFixer\Fixer\FunctionNotation\MethodArgumentSpaceFixer;
use PhpCsFixer\Fixer\FunctionNotation\NullableTypeDeclarationForDefaultNullValueFixer;
use PhpCsFixer\Fixer\FunctionNotation\VoidReturnFixer;
use PhpCsFixer\Fixer\Import\NoUnusedImportsFixer;
use PhpCsFixer\Fixer\LanguageConstruct\ExplicitIndirectVariableFixer;
use PhpCsFixer\Fixer\Operator\ConcatSpaceFixer;
use PhpCsFixer\Fixer\PhpTag\BlankLineAfterOpeningTagFixer;
use PhpCsFixer\Fixer\Phpdoc\GeneralPhpdocAnnotationRemoveFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocOrderFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocSummaryFixer;
use PhpCsFixer\Fixer\ReturnNotation\NoUselessReturnFixer;
use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use PhpCsFixer\Fixer\StringNotation\ExplicitStringVariableFixer;
use PhpCsFixer\Fixer\Whitespace\CompactNullableTypeDeclarationFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->rule(ModernizeTypesCastingFixer::class);
    $ecsConfig->ruleWithConfiguration(
        ClassAttributesSeparationFixer::class,
        ['elements' => ['property' => 'one', 'method' => 'one', 'const' => 'one']]
    );
    $ecsConfig->ruleWithConfiguration(
        MethodArgumentSpaceFixer::class,
        ['on_multiline' => 'ensure_fully_multiline']
    );
    $ecsConfig->rule(NullableTypeDeclarationForDefaultNullValueFixer::class);
    $ecsConfig->rule(VoidReturnFixer::class);
    $ecsConfig->ruleWithConfiguration(
        ConcatSpaceFixer::class,
        ['spacing' => 'one']
    );
    $ecsConfig->ruleWithConfiguration(
        GeneralPhpdocAnnotationRemoveFixer::class,
        ['annotations' => ['copyright', 'category']]
    );
    $ecsConfig->rule(PhpdocOrderFixer::class);
    $ecsConfig->rule(NoUselessReturnFixer::class);
    $ecsConfig->rule(NoUnusedImportsFixer::class);
    $ecsConfig->rule(DeclareStrictTypesFixer::class);
    $ecsConfig->rule(CompactNullableTypeDeclarationFixer::class);
    $ecsConfig->rule(NoImportFromGlobalNamespaceFixer::class);
    $ecsConfig->rule(NoSuperfluousConcatenationFixer::class);
    $ecsConfig->rule(NoUselessCommentFixer::class);
    $ecsConfig->rule(PhpdocNoIncorrectVarAnnotationFixer::class);
    $ecsConfig->rule(SingleSpaceAfterStatementFixer::class);

    $ecsConfig->skip([
        SelfAccessorFixer::class,
        ExplicitIndirectVariableFixer::class,
        BlankLineAfterOpeningTagFixer::class,
        PhpdocSummaryFixer::class,
        ExplicitStringVariableFixer::class,
        NoUselessCommentFixer::class,
        AssignmentInConditionSniff::class,
    ]);
};
