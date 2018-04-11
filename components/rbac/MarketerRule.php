<?php

namespace app\components\rbac;

use Yii;
use yii\rbac\Rule;

class MarketerRule extends Rule
{
	use RuleTrait;

	public $name = 'isMarketer';

	public function execute($user, $item, $params)
	{
		$employee = $this->getEmployee($user);
		return $employee ? $employee->is_marketer : false;
	}
}