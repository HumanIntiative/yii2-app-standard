<?php

return [
	// 'bootstrap' => ['gii'],
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