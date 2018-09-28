<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'defaultRoute' => 'posts',
    'layout' => 'posts',
    'language' => 'ru',
    'timeZone' => 'Europe/Moscow',
//    'catchAll' => ['offline'],
    'components' => [
        'request' => [
//            'csrfParam' => '_csrf-frontend',
            'enableCsrfValidation' => false,
            'baseUrl' => ''
        ],
        'user' => [
//            'identityClass' => 'common\models\User',
//            'enableAutoLogin' => true,
//            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
//            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '<city:[а-яА-Я_]{5,}>' => 'posts',
                '<city:[а-яА-Я_]{5,}>/<categ:[а-яА-Я]{3,}>' => 'posts',
                '<city:[а-яА-Я_]{5,}>/<categ:[а-яА-Я]{3,}>/<name:[а-яА-Я]{3,}>' => 'posts',
                '<city:[а-яА-Я_]{5,}>/<categ:[а-яА-Я]{3,}>/<sett:[\w\=\;-]{3,}>' => 'posts',
//                '<controller:account|info>/<action>/<get>' => '<controller>/<action>'
            ],
        ],
    ],
    'params' => $params,
];
