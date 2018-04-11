<?php

return [
	// 'bootstrap' => ['gii'],
	'id' => 'app-console-dev',
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