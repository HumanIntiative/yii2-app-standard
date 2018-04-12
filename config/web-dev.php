<?php

// Settings for web-application only
return [
	'bootstrap' => ['gii'],
	'components' => [
		'cache' => [
			'class' => 'yii\caching\DummyCache',
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
			'debug/*',
			'gii/*',
			'site/error',
			'site/login',
			'site/logout',
		],
	],
];
