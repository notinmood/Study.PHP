<?php
/**
 * @file   : ArrayMap中的匿名函数作为参数1.2.php
 * @time   : 10:08
 * @date   : 2021/8/12
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

/**
 * 这个调用addItem不是匿名参数,从这里可以过渡到ArrayMap中的匿名函数作为参数2.php
 * ArrayMap中的匿名函数作为参数2.php内是匿名函数作为参数
 */
class CSClass
{
    public static function addItem($ia, $ib)
    {
        return $ia + $ib;
    }
}

$a1 = [1, 2, 3, 4, 5];
$a2 = [6, 7, 8, 9, 10];

// $r = array_map('CSClass::addItem', $a1, $a2);
$r = array_map(array('CSClass', 'addItem'), $a1, $a2);
var_dump($r);
