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
//    ->setRiskyAllowed(true)  // コードの挙動が変わる可能性があるので検討後に設定する
    ->setRules([
        // お気に入りの設定があればお好きに設定
        // @see https://cs.symfony.com/doc/rules/index.html
        '@Symfony' => true,
        '@PhpCsFixer' => true,
        '@PSR12' => true,
    ])
    ->setFinder($finder);
