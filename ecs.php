<?php

// ecs.php
use PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;
use Symplify\CodingStandard\Fixer\LineLength\LineLengthFixer;
use PHP_CodeSniffer\Standards\Generic\Sniffs\Files\LineLengthSniff;

return static function (ContainerConfigurator $containerConfigurator): void {
    // A. full sets
    $containerConfigurator->import(SetList::PSR_12);
    $containerConfigurator->import(SetList::CLEAN_CODE);

    // B. standalone rule
    $services = $containerConfigurator->services();
    $services->set(LineLengthSniff::class)
        ->property('absoluteLineLimit', 120);

    $services->set(LineLengthFixer::class)
        ->call('configure', [[
            'max_line_length' => 120, # default: 120
            'break_long_lines' => true, # default: true
            'inline_short_lines' => true, # default: true
        ]]);
    $parameters = $containerConfigurator->parameters();

    // alternative to CLI arguments, easier to maintain and extend
    $parameters->set(Option::PATHS, [__DIR__ . '/src', __DIR__ . '/tests']);
};
