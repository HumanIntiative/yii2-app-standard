<?php

// Settings for web-application only
return [
	'bootstrap' => ['gii'],
	'components' => [
		'cache' => [
			'class' => 'yii\caching\DummyCache',
		],
		'log' => [
			'targets' => [
				// writes to php-fpm output stream
				[
					'class' => 'codemix\streamlog\Target',
					'url' => 'php://stderr',
					'levels' => ['error', 'warning'],
					'logVars' => [],
				],
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
		'allowActions' => [
			'debug/*',
			'gii/*',
			'site/error',
			'site/login',
			'site/logout',
		],
	],
];
