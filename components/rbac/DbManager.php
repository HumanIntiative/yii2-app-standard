<?php

namespace app\components\rbac;

use Yii;
use yii\rbac\DbManager as BaseDbManager;

class DbManager extends BaseDbManager
{
    public $itemTable = 'pdg.auth_item';
    public $itemChildTable = 'pdg.auth_item_child';
    public $assignmentTable = 'pdg.auth_assignment';
    public $ruleTable = 'pdg.auth_rule';
    public $defaultRoles = ['Employee'];
}
