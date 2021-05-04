<?php

// ecs.php
use PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;
use Symplify\CodingStandard\Fixer\LineLength\LineLengthFixer;

return static function (ContainerConfigurator $containerConfigurator): void {
    // A. standalone rule
    $services = $containerConfigurator->services();
    $services->set(ArraySyntaxFixer::class)
        ->call('configure', [[
            'syntax' => 'short',
        ]]);

    $services->set(LineLengthFixer::class)
        ->call('configure', [[
            'max_line_length' => 120, # default: 120
            'break_long_lines' => true, # default: true
            'inline_short_lines' => false, # default: true
        ]]);

    // B. full sets
    $parameters = $containerConfigurator->parameters();
    $parameters->set(
        Option::PATHS,
        [
            __DIR__ . '/src',
            __DIR__ . '/tests'
        ]
    );
    $parameters->set(
        Option::SETS,
        [
            SetList::CLEAN_CODE,
            SetList::PSR_12
        ]
    );
};
