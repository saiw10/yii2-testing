<?php
$config =  yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/main.php'),
    require(__DIR__ . '/main-local.php'),
    [
    'id' => 'app-frontend-tests',
    'components' => [
        'assetManager' => [
            'basePath' => __DIR__ . '/../web/assets',
        ],
        'urlManager' => [
            'showScriptName' => true,
        ],
        'request' => [
            'cookieValidationKey' => 'test',
        ],
        'db' => [
            'dsn' => 'mysql:host=localhost;dbname=test_db',
            'username' => 'root',
            'password' => '1234',
        ]
    ],
]
        );

return $config;