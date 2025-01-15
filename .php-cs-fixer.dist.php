<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()
    // チェックするディレクトリの指定
    ->in([
        __DIR__ . '/app',
        __DIR__ . '/config',
        __DIR__ . '/database',
        __DIR__ . '/routes',
        __DIR__ . '/tests',
    ]);

$config = new PhpCsFixer\Config();

return $config
    ->setRiskyAllowed(true)
    ->setRules([
        // お気に入りの設定があればお好きに設定
        // @see https://cs.symfony.com/doc/rules/index.html
        '@Symfony' => true, // Symfony が公式で提供する Coding Standards https://symfony.com/doc/current/contributing/code/standards.html
        '@PhpCsFixer' => true,
        '@PSR12' => true, // PSR2 を拡張したもの

        'declare_strict_types' => true, //
    ])
    ->setFinder($finder);
