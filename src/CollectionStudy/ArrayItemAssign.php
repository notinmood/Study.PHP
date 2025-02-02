<?php

namespace CollectionStudy;

use phpDocumentor\Reflection\Types\Array_;

/**
 *  => 数组中元素赋值符号的使用
 * Class ArrayItemAssign
 * @package Misc
 */
class ArrayItemAssign
{
    public static function composeArray(): array
    {
        //初始化为空数组
        $myArray = array();
        /** @noinspection all */
        $myArray = [];

        //正确的赋值方式
        /** @noinspection all */
        $myArray = ['a' => 'AA', 'b' => 'BB'];
        $myArray['c'] = "CC";

        //错误的赋值方式
        //$myArray = ['a':'AA']; //这种写法不对
        //$myArray = ['a' = 'AA']; //这种写法不对

        return $myArray;
    }
}


var_dump(ArrayItemAssign::composeArray());
