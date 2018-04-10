<?php

if (YII_ENV == 'dev') {
	$hostname = getenv('DEV_DB_HOST');
	$port = getenv('DEV_DB_PORT');
	$database = getenv('DEV_DB_NAME');
	$username = getenv('DEV_DB_USER');
	$password = getenv('DEV_DB_PASS');
} else {
	$hostname = getenv('DB_HOST');
	$port = getenv('DB_PORT');
	$database = getenv('DB_NAME');
	$username = getenv('DB_USER');
	$password = getenv('DB_PASS');
}

return [
    'class' => 'yii\db\Connection',
    'dsn' => "pgsql:host={$hostname};port={$port};dbname={$database}",
		'username' => $username,
		'password' => $password,
    'charset' => 'utf8',
    'attributes' => [\PDO::ATTR_EMULATE_PREPARES => true],
    'queryCacheDuration' => getenv('CACHE_DURATION'),
		'schemaCacheDuration' => getenv('CACHE_DURATION'),
];
