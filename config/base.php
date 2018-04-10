<?php

@date_default_timezone_set('Asia/Jakarta');

// Basic configuration, used in web and console applications, for development
return [
	'id' => 'app',
	'name' => getenv('APP_TITLE'),
	'language' => 'id',
	'basePath' => dirname(__DIR__),
	'bootstrap' => ['log','queue'], // Bootstrapped modules are loaded in every request
	'defaultRoute' => 'dashboard',
	'controllerMap' => [
		'migrate' => [
			'class'=>'yii\console\controllers\MigrateController',
			'migrationTable'=>'sys_migration',
		],
	],
	'components' => [
		'authManager' => [
      'class' => 'app\components\rbac\DbManager',
    ],
    'errorHandler' => [
			'errorAction' => 'site/error',
		],
    'formatter' => [
    	'class' => 'app\components\i18n\Formatter',
    ],
		'log' => [
			'traceLevel' => getenv('YII_DEBUG')==1 ? 3 : 0,
			'targets' => [
				[
					'class' => 'yii\log\FileTarget',
					'levels' => ['error', 'warning'],
					'categories' => [
						'yii\db\*',
						'yii\web\HttpException:*',
					],
				],
			],
		],
		'mailer' => require(__DIR__ . '/mail.php'),
		'request' => [
			'cookieValidationKey' => getenv('APP_COOKIE_VALIDATION_KEY'),
			'parsers' => [
				'application/json' => 'yii\web\JsonParser',
			],
		],
		'urlManager' => [
			'class'=>'app\components\web\UrlManager',
			'enablePrettyUrl' => getenv('APP_PRETTY_URLS')
		],
		'view' => [
			'class' => 'app\components\web\View',
			// 'as additional' => 'pkpudev\components\web\ViewBehavior',
		],
	],
	'modules' => [
		// For Dev
		'gii' => [
			'class' => 'yii\gii\Module',
			'allowedIPs' => ['127.0.0.1', '::1', '192.168.*', '172.24.*', '172.18.*'],
		],
		// Main
		'gridview' =>  [
			'class' => '\kartik\grid\Module'
		],
		// Rbac
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
	'params' => require(__DIR__ . '/params.php'),
	'aliases' => require(__DIR__ . '/aliases.php'),
];