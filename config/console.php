<?php

Yii::setAlias('@tests', dirname(__DIR__) . '/tests');

$params = require(__DIR__ . '/params.php');
$db = require(__DIR__ . '/db.php');

return [
    'id' => 'basic-console',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log', 'gii', 'swagger'],
    'controllerNamespace' => 'app\commands',
    'modules' => [
        'gii' => 'yii\gii\Module',
        'swagger' => [
            'class' => 'mobidev\swagger\Module',
            'jsonPath' => '@web/swagger-dev.json',
            'host' => 'api.192.168.33.68.xip.io',
            'basePath' => '/v1',
            'description' => 'My Project API documentation (swagger-2.0 specification)',
            'defaultInput' => 'body',
            'controllerPath' => '@app/modules/v1/controllers'
        ],
    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
    ],
    'params' => $params,
];
