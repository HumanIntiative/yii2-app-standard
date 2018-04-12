<?php

namespace app\components\data;

class Pagination extends \yii\data\Pagination
{
    const PAGE_SIZE = 20;

    public function init()
    {
        parent::init();
        $this->defaultPageSize = self::PAGE_SIZE;
    }
}
