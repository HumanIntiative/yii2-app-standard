<?php

namespace app\components\web;

use mdm\admin\components\Helper;

trait WebUserTrait
{
    public function canAccessRoute($route, $params = [])
    {
        return Helper::checkRoute($route, $params, $this);
    }

    public function canBetween(array $arrRole, $default=false)
    {
        foreach ($arrRole as $roleStr) {
            $default = $default || $this->can($roleStr);
        }

        return $default;
    }

    public function getIsCreator($model, $attribute='created_by')
    {
        if (!$model->hasAttribute($attribute)) {
            return false;
        }
        return $this->id == $model->$attribute;
    }

    public function getIsLoginUser($userId)
    {
        if (is_null($this->identity)) {
            return false;
        }
        return $this->id == $userId;
    }

    public function getIsMarketer()
    {
        if (is_null($this->identity)) {
            return false;
        }
        return $this->identity->is_marketer == 1;
    }

    public function getIsCompany($cid)
    {
        if (is_null($this->identity)) {
            return false;
        }
        return $this->identity->company_id == $cid;
    }
}
