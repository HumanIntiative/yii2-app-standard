<?php

\Yii::$container->set('pkpudev\components\behaviors\LocationData', [
    'class'=>'pkpudev\components\behaviors\LocationData',
    'locationModel'=>new \app\models\Location,
    'countryModel'=>new \app\models\Country,
]);

\Yii::$container->set('pkpudev\components\widgets\LocationDropdown', [
    'class'=>'pkpudev\components\widgets\LocationDropdown',
    'locationModel'=>new \app\models\Location,
    'countryModel'=>new \app\models\Country,
]);
