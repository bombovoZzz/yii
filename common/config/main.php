<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
        'assetManager' => [
            'appendTimestamp' => true, // временная метка для файлов-ресурсов для кеширования (при обновлении файла меняется)
            'converter' => [
                'class' => 'yii\web\AssetConverter',
                'commands' => [
                    'sass' => ['css', 'sass {from} {to}'],
                ],
            ],
        ],
    ],
];
