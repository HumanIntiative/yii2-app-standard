<?php

namespace app\components\rbac;

use Yii;

class Assignment extends \mdm\admin\models\Assignment
{
    public function getItems()
    {
        $items = parent::getItems();

        if (!Yii::$app->user->can('SuperUser')) {
            if (isset($items['avaliable']['SuperUser'])) {
                unset($items['avaliable']['SuperUser']);
            }
        }

        return $items;
    }
}