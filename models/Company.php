<?php

namespace app\models;

use Yii;
use \app\models\base\Company as BaseCompany;

/**
 * This is the model class for table "company".
 */
class Company extends BaseCompany
{
    const PKPU = 1;
    const IZI  = 2;
    const CMN  = 3;
    const IWAKAF = 4;

    public static function getCompanyName($id)
    {
        $names = [null, 'PKPU Human Initiative', 'IZI Zakat Initiative', 'Citra Mandiri Nusantara'];
        return $names[$id];
    }

    public static function getCompanyShortName($id)
    {
        $names = [null, 'PKPU', 'IZI', 'CMN'];
        return $names[$id];
    }

    public static function getCompanyAddress($id)
    {
        $addresses = [
            '',
            'Jl. Raya Condet No. 27-G Batu Ampar Jakarta Timur 13520 - Indonesia',
            'Jl. Raya Condet No 54 D-E Batu Ampar Jakarta Timur 13520 - Indonesia'
        ];
        return $addresses[$id];
    }

    public static function getCompanyList()
    {
        return [1=>'PKPU', 2=>'IZI', 3=>'CMN'];
    }

    public static function getCompanySite($id)
    {
        $sites = ['', 'http://pkpu.or.id', 'http://izi.or.id'];
        return $sites[$id];
    }

    public static function getCompanyLogo($id)
    {
        $logos = ['', 'img/pkpu.png', 'img/izi.png'];
        return sprintf('http://devproject.%s/%s', getenv('DOMAIN_URL'), $logos[$id]);
    }

    public static function GetSkinTheme($id)
    {
        $skins = [null, 'skin-blue', 'skin-green', 'skin-yellow'];
        return $skins[$id];
    }
}
