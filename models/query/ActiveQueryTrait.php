<?php

namespace app\models\query;

use Yii;

trait ActiveQueryTrait
{
    public function byCompany()
    {
        if (!Yii::$app->user->can('SuperUser')) {
            $this->andWhere(['company_id'=>Yii::$app->user->identity->company_id]);
        }
        return $this;
    }
}
