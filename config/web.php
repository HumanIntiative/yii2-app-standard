<?php

// Settings for web-application only
return [
    'components' => [
        'cache' => [
            'class' => 'yii\redis\Cache',
            'redis' => 'redis',
            'defaultDuration' => getenv('CACHE_DURATION'),
            'keyPrefix' => 'pdg_',
        ],
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\EmailTarget',
                    'mailer' => 'mailer',
                    'levels' => ['error', 'warning'],
                    'message' => [
                        'from' => ['project@pkpu.or.id'],
                        'to' => ['error@gmail.com'],
                        'subject' => 'Error Message (Log)',
                    ],
                ]
            ],
        ],
    ],
    'modules' => [
        'admin' => [
            'class' => 'mdm\admin\Module',
            'controllerMap' => [
                'assignment' => [
                    'class' => 'app\controllers\rbac\AssignmentController',
                ],
                'role' => [
                    'class' => 'app\controllers\rbac\RoleController',
                ],
            ],
        ],
    ],
    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            'site/error',
            'site/login',
            'site/logout',
        ],
    ],
];
