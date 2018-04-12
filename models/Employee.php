<?php

namespace app\models;

use app\models\base\Employee as BaseEmployee;

/**
 * This is the model class for table "sdm_employee".
 */
class Employee extends BaseEmployee
{
    /**
     * @return string
     */
    public function getName()
    {
        if ($this->id == 1) {
            return 'System';
        }
        return $this->full_name;
    }

    /**
       * @return string
       */
    public function getPosition_detail()
    {
        return ($position = $this->position) ?
            sprintf('%s - %s', $position->position_name, $position->department) :
            ' - ';
    }

    //
    // Relations
    //

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBranch()
    {
        return $this->hasOne(\app\models\Branch::className(), ['id' => 'branch_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompany()
    {
        return $this->hasOne(\app\models\Company::className(), ['id' => 'company_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosition()
    {
        return $this->hasOne(\app\models\view\Position::className(), ['employee_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getManager()
    {
        $upperId = VwEmployeeManager::find()
            ->select('upper_id')
            ->where(['employee_id'=>$this->id])
            ->scalar();

        if ($upperId) {
            return self::findOne($upperId);
        } else {
            return null;
        }
    }
}
