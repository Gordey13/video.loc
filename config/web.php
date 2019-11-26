<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'ru-Ru',
    'defaultRoute' => 'category/index',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'Zl67OyGqiGks0Omo03v7g48cvS4XSXa3',
            'baseUrl' => '',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
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
        'db' => $db,
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => false,
            'rules' => [
//                [
//                    '<action:\w+>/<id:\d+>/<slug:[a-z0-9_-]+>' => 'category/<action>',
//                    '<action:\w+>/<id:\d+>' => 'category/<action>',
//                    '<action:\w+>' => 'category/<action>',
////                '<action>/<id:\d+>-<slug:[\w_-]+>' => 'product/view',
////                '<action>/<id:[\w_-]+>' => 'product/view',
//                ],
                [
                'pattern' => '<id:\d+>-<slug:[\w_-]+>',
                'route' => 'product/view',
                'suffix' => '.html',
                ],
                [
                    'pattern' => '<id:[\w_-]+>',
                    'route' => 'product/view',
                    'suffix' => '.html',
                ],
                [
                    'pattern' => '<id:\d+>-<url:[\w_-]+>',
                    'route' => 'category/view',
                    'suffix' => '.html',
                ],
                [
                    'pattern' => '<id:\d+>',
                    'route' => 'category/view',
                    'suffix' => '.html',
                ],
                [
                    'pattern' => '<action:\w+>',
                    'route' => 'category/view',
                    'suffix' => '.html',
                ],
           ],
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
