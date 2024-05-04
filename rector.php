<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Symfony\Set\SensiolabsSetList;
use Rector\TypeDeclaration\Rector\ClassMethod\AddVoidReturnTypeWhereNoReturnRector;
use Rector\Doctrine\Set\DoctrineSetList;
use Rector\Php74\Rector\Property\TypedPropertyRector;
use Rector\Set\ValueObject\SetList;
use Rector\Symfony\Set\SymfonySetList;

return static function (RectorConfig $rectorConfig): void {
    // here we can define, what sets of rules will be applied
    // tip: use "SetList" class to autocomplete sets
    $rectorConfig->sets([
        SetList::CODE_QUALITY,
        SensiolabsSetList::ANNOTATIONS_TO_ATTRIBUTES,
        DoctrineSetList::ANNOTATIONS_TO_ATTRIBUTES,
        SymfonySetList::ANNOTATIONS_TO_ATTRIBUTES,
        SymfonySetList::SYMFONY_CONSTRUCTOR_INJECTION,
        SymfonySetList::SYMFONY_CODE_QUALITY

    ]);
    // register single rule
//    $rectorConfig->rule(TypedPropertyRector::class);
};
//return RectorConfig::configure()
//    ->withPaths([
//        __DIR__ . '/config',
//        __DIR__ . '/public',
//        __DIR__ . '/src',
//        __DIR__ . '/tests',
//    ])
//    // uncomment to reach your current PHP version
//    // ->withPhpSets()
//    ->withRules([
//        AddVoidReturnTypeWhereNoReturnRector::class,
//    ]);





