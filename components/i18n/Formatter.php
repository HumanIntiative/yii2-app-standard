<?php

namespace app\components\i18n;

use NumberFormatter;
use yii\i18n\Formatter as YiiFormatter;

class Formatter extends YiiFormatter
{
    public $locale = 'id-ID';
    public $dateFormat = 'dd MMM yyyy';
    public $decimalSeparator = ',';
    public $nullDisplay = '';
    public $numberFormatterSymbols = [NumberFormatter::CURRENCY_SYMBOL => 'Rp. '];
    public $thousandSeparator = '.';
}
