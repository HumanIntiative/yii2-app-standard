<?php

return [
	// 'bootstrap' => ['gii'],
	'id' => 'app-console',
	'basePath' => dirname(__DIR__),
	'controllerNamespace' => 'app\commands',
	'controllerMap' => [
		'fixture' => [
			'class' => 'yii\faker\FixtureController',
		],
	],
	'components' => [
		'request' => null,
	],
	'modules' => [
		'gii' => [
			'class' => 'yii\gii\Module',
		],
	],
];