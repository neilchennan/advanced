<?php

namespace common\business;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/28
 * Time: 12:33
 */
use Yii;
use common\models\TBdPerson;


class EhrHelper
{
    public static function getBdPersonNameById($id)
    {
        $obj = TBdPerson::findOne($id);
        if (!isset($obj) || $obj == null) {
            return Yii::t('app', 'No Record Found');
        }

        return $obj->FNAME_L2;
    }
}