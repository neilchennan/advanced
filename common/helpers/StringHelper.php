<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/28
 * Time: 16:06
 */

namespace common\helpers;


class StringHelper
{
    /**
     * @param $oracle_date_time_str "15-6月 -91 12.00.00.000000 上午"
     */
    public static function oracleDateTimeToStr($oracle_date_time_str)
    {
        $dateArr = [];
        preg_match('/(?<d>\d{2})-(?<m>\d{1,2})月\s*-(?<y>\d{2})/',$oracle_date_time_str,$dateArr);
        $return_str = date('Y-m-d',strtotime($dateArr['y'].'-'.$dateArr['m'].'-'.$dateArr['d']));
        return $return_str;
    }
}