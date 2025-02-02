<?php
/**
 * @file   : 匹配.php
 * @time   : 11:51
 * @date   : 2021/8/27
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

$subject = "php5php6php7";

//1、不启用分组的时候,结果集中的二维数组中只有一个元素,这个元素又是另外一个数组(这个数组内记录了所有匹配成功的各个结果)
$pattern = "/php[0-9]/";
$result = preg_match_all($pattern, $subject, $arr);

echo "总共匹配了{$result}条.", PHP_EOL;
print_r($arr);
//--结果为────────────────────────
//Array ( [0] => Array ( [0] => php5 [1] => php6 [2] => php7 ) )

//2.1、给pattern加上括号,表示启用"分组"功能;那么结果集的二维数组中就有多个元素了.
//更多信息参看 https://www.feiniaomy.com/post/421.html
$pattern = "/(php[0-9])/";
$result = preg_match_all($pattern, $subject, $arr);
echo "总共匹配了{$result}条.", PHP_EOL;
print_r($arr);
//--output────────────────────────
//Array ( [0] => Array ( [0] => php5 [1] => php6 [2] => php7 ) [1] => Array ( [0] => php5 [1] => php6 [2] => php7 ) )

//2.2、启用多个分组
$pattern = "/((php)[0-9])/";
$result = preg_match_all($pattern, $subject, $arr);
echo "总共匹配了{$result}条.", PHP_EOL;
print_r($arr);
//--output────────────────────────
/*
Array
(
    [0] => Array
        (
            [0] => php5
            [1] => php6
            [2] => php7
        )

    [1] => Array
        (
            [0] => php5
            [1] => php6
            [2] => php7
        )

    [2] => Array
        (
            [0] => php
            [1] => php
            [2] => php
        )

)

*/
