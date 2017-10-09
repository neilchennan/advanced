<?php

namespace common\helpers;

/**
 * 字符串工具类
 *
 * @author nanchen
 *
 */
class StringUtil
{

    /**
     * 空字符串
     *
     * @var string
     */
    public static $emptyString = "";

    /**
     * 判断字符串是否为空
     *
     * @param string $str
     * @return boolean
     */
    public static function isNullOrWhiteSpace($str)
    {
        return !(isset($str) && strlen(trim($str)) > 0);
    }

    /**
     * Returns a value indicating whether the give value is "empty".
     *
     * The value is considered "empty", if one of the following conditions is satisfied:
     *
     * - it is `null`,
     * - an empty string (`''`),
     * - a string containing only whitespace characters,
     * - or an empty array.
     *
     * @param mixed $value
     * @return bool if the value is empty
     */
    public static function isEmpty($value)
    {
        return $value === '' || $value === [] || $value === null || is_string($value) && trim($value) === '';
    }

    /**
     * 从$sourceStr找$findstr第一次出现的位置，基于0开始,如果找到则返回其所在位置，没找到返回-1，如indexOf("123","1")返回0
     *
     * @param string $sourceString
     *            被找字符串
     * @param string $findString
     *            要查找的字符串
     * @param bool $caseInsCompare
     *            是否区分大小写，默认区分
     * @param int $start_index
     *            查找起始位置，以0开始
     * @return number 查找的位置，没找到返回-1
     */
    public static function indexOf($sourceString, $findString, $caseInsCompare = true, $start_index = 0)
    {
        if (self::isNullOrWhiteSpace($sourceString)) {
            return -1;
        }
        if ($caseInsCompare) {
            $idx_result = strpos($sourceString, $findString, $start_index);
        } else {
            $idx_result = stripos($sourceString, $findString, $start_index);
        }
        if ($idx_result === false) {
            return -1;
        }
        return $idx_result;
    }

    /**
     * 从$sourceStr找$findstr最后一次出现的位置，基于0开始,如果找到则返回其所在位置，没找到返回-1，如indexOf("121","1")返回2
     *
     * @param string $sourceString
     *            被找字符串
     * @param string $findString
     *            要查找的字符串
     * @param bool $caseInsCompare
     *            是否区分大小写，默认区分
     * @param int $start_index
     *            查找起始位置，以0开始
     * @return number 查找的位置，没找到返回-1
     */
    public static function lastIndexOf($sourceString, $findString, $caseInsCompare = true, $start_index = 0)
    {
        if (self::isNullOrWhiteSpace($sourceString)) {
            return -1;
        }
        if ($caseInsCompare) {
            $idx_result = strrpos($sourceString, $findString, $start_index);
        } else {
            $idx_result = strripos($sourceString, $findString, $start_index);
        }
        if ($idx_result === false) {
            return -1;
        } else {
            return $idx_result;
        }
    }

    /**
     * 字符串分隔为数组
     *
     * @param string $str
     *                      要分隔的字符串
     * @param string $seprator
     *                      分隔符号，非正则表达式
     * @param bool $isreg 是否是正则表达式
     * @return array 分隔后的数组
     */
    public static function split($str, $seprator, $isreg = false)
    {
        $result = null;
        if ($isreg) {
            $result = preg_split($seprator, $str);
        } else {
            $result = explode($seprator, $str);
        }
        return $result;
    }

    public static function replace($sourceString, $findString, $replaceString)
    {
        return str_replace($findString, $replaceString, $sourceString);
    }

    /**
     * 转换为int
     *
     * @param string $str
     * @return number
     */
    public static function toInt($str)
    {
        return (int)$str;
    }

    /**
     * 转换为float
     *
     * @param string $str
     * @return number
     */
    public static function toFloat($str)
    {
        return (float)$str;
    }

    /**
     * Excel读取单元格值，单引号处理
     * @param $str
     * @return mixed|string
     */
    public static function excelReplaceQuotes($str)
    {
        if (self::isEmpty($str)) {
            return '';
        }
        $str = trim($str);
        if (self::lastIndexOf($str, '\'') == 0) {
            return str_replace('\'', '', $str);
        }
        return $str;
    }


    /** 返回截取的短字符串
     * @param $sourceStr 输入的字符串
     * @param int $length 长度，如果默认-1，则返回全部，否则返回长度为length的string
     * @return string
     */
    public static function getShortString($sourceStr, $length = -1){
        if (self::isEmpty($sourceStr)) {
            return '';
        }
        $strTrim = trim($sourceStr);
        if ($length == -1)
            return $strTrim;
        $lenOfStr = strlen($strTrim);
        if ($lenOfStr <= $length)
            return $strTrim;
        return mb_substr($strTrim, 0, $length).'...';
    }
}