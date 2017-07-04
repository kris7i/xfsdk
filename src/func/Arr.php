<?php

namespace websdk\func;
class Arr
{
    /**
     * [get desc]
     * @desc 获取数组的某一项
     * @author limx
     * @param $key 字符串
     * @param string $dot 标识符
     */
    public static function get($key, $arr, $dot = '.')
    {
        if (!is_array($key)) {
            return self::get(explode($dot, $key), $arr);
        }
        if (count($key) == 0) {
            return $arr;
        }

        if (!isset($arr[$key[0]])) {
            return null;
        }
        $arr = $arr[$key[0]];
        array_splice($key, 0, 1);
        return self::get($key, $arr, $dot = '.');
    }

}