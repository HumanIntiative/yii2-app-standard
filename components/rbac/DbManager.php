<?php

namespace app\components\rbac;

use Yii;
use yii\rbac\DbManager as BaseDbManager;

class DbManager extends BaseDbManager
{
	public $itemTable = 'auth_item';
  public $itemChildTable = 'auth_item_child';
  public $assignmentTable = 'auth_assignment';
  public $ruleTable = 'auth_rule';
  public $defaultRoles = ['Employee'];
}