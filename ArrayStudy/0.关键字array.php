<?php
/**
 * @file   : 0.关键字array.php
 * @time   : 18:26
 * @date   : 2022/2/7
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

// +--------------------------------------------------------------------------
// |::说明：| PHP中关键字array有2种使用方法：
// |·······|    1. 作为构造array数组的方法名称使用：array(...args)
// |·······|    2. 作为数据类型名称使用。
// +--------------------------------------------------------------------------

/**
 * 1. 作为方法名称使用
 * (函数 array 和 Array 是一样的，因为传统的 PHP 内各成员是不区分大小写的)
 */
$myArray = array(1, 2, 6, 9);
// @formatter:off
$myArray = Array(1, 2, 6, 9);
// @formatter:on

/**
 * 2. 作为类型名称使用
 */
$myType = gettype($myArray);
$myType = getType($myArray);
var_dump($myType);
//--返回的结果为 "array"

