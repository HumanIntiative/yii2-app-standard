<?php

namespace app\components\rbac;

use Yii;
use app\models\Employee;

trait RuleTrait
{
    public function getEmployee($userId)
    {
        if (Yii::$app->hasProperty('user')) {
            $employee = Yii::$app->user->identity;
        } else {
            $employee = Employee::findOne($userId);
        }
        return $employee;
    }
}
