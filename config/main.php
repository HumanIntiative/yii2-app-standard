<?php

// Define application aliases
Yii::setAlias('@app', dirname(__DIR__).'/..');
Yii::setAlias('@root', '@app');
Yii::setAlias('@runtime', '@app/runtime');
Yii::setAlias('@web', dirname(__DIR__).'/../web');
Yii::setAlias('@webroot', dirname(__DIR__).'/web');

// Load $merge configuration files
$appType = php_sapi_name() == 'cli' ? 'console' : 'web';
$env = YII_ENV;
$configDir = __DIR__;

$config = \yii\helpers\ArrayHelper::merge(
    require("{$configDir}/base.php"),
    file_exists("{$configDir}/db.php") ?
        require("{$configDir}/db.php") : [],
    file_exists("{$configDir}/queue.php") ?
        require("{$configDir}/queue.php") : [],
    file_exists("{$configDir}/{$appType}-{$env}.php") ?
        require("{$configDir}/{$appType}-{$env}.php") : require("{$configDir}/{$appType}.php"),
    file_exists("{$configDir}/user.php") ?
        require("{$configDir}/user.php") : []
);

require('di.php'); // Initialize DI

return $config;
