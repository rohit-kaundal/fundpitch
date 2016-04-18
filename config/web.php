<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'view' => [
          'theme' => [
            'pathMap' => ['@app/views' => '@app/themes/adminlte'],
            'baseUrl' => '@web/../themes/adminlte',
          ],
        ],
        
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'pokAp5UVpsA8E-5rNSsHCSWnN9LnYfxN',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@app/mailer',
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.gmail.com',
                'username' => 'consolebrosgames',
                'password' => 'kxckjaeimexrpspc',
                'port' => '465',
                'encryption' => 'ssl',
            ],
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
        'db' => require(__DIR__ . '/db.php'),
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                // URL rewriting rules
                'admin/<controller>/<action>' => '<controller>/<action>',
                'admin/<controller>' => '<controller>/',
            ],
            
        

        ],
        
    ],
    'params' => $params,
    
    'modules' => [
        'utility' => [
                'class' => 'c006\utility\migration\Module',
        ],
            'user' => [
                //'identityClass' => 'app\models\User',
                //'enableAutoLogin' => true,
                'class' => 'dektrium\user\Module',
                'enableUnconfirmedLogin' => true,
                'confirmWithin' => 21600,
                'cost' => 12,
                'admins' => ['admin']
            ],
    ],
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'allowedIPs' => ['*'],
    ];
    
    /*//$config['bootstrap'][] = 'utility';
    $config['modules']['utility'] = [
            'class' => 'c006\utility\migration\Module',
        ];*/
}

return $config;
