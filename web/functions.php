<?php

function fn_autoinjectclass()
{
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
}

function fn_pretty_print($vars, $exit=false)
{
    echo '<pre>';
    var_dump($vars);
    echo '</pre>';
    if ($exit) {
        exit;
    }
}

function fn_array_map_types($array)
{
    return array_reduce($array, function ($carry, $item) {
        $carry["$item"] = $item;
        return $carry;
    }, []);
}

function fn_get_classname_short($object)
{
    if ($reflect = new ReflectionClass($object)) {
        return $reflect->getShortName();
    } else {
        return null;
    }
}
