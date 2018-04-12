<?php

namespace app\rbac;

use Yii;
use app\rbac\AuthenticationRule;
use app\models\Employee;

/**
 * Checks if authorID matches user passed via params
 */
class EmployeeRule extends AuthenticationRule
{
    public $name = 'isEmployee';

    /**
     * @param string|integer $user the user ID.
     * @param Item $item the role or permission that this rule is associated with
     * @param array $params parameters passed to ManagerInterface::checkAccess().
     * @return boolean a value indicating whether the rule permits the role or permission it is associated with.
     */
    public function execute($user, $item, $params)
    {
        if (parent::execute($user, $item, $params)) {
            return Employee::find()->where(['id' => $user])->exists();
        } else {
            return false;
        }
    }
}
