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
    public static function composeArray()
    {
        $myArray = array();
        $myArray = [];

        //$myArray = ['a':'AA']; //这种写法不对
        //$myArray = ['a' = 'AA']; //这种写法不对

        $myArray = ['a' => 'AA', 'b' => 'BB'];
        $myArray['c'] = "CC";

        return $myArray;
    }
}


var_dump(ArrayItemAssign::composeArray());