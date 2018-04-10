<?php

namespace app\models;

use app\models\base\Employee as BaseEmployee;

/**
 * This is the model class for table "sdm_employee".
 */
class Employee extends BaseEmployee
{
  public function getName()
  {
    if ($this->id == 1) return 'System';
    return $this->full_name;
  }
}
