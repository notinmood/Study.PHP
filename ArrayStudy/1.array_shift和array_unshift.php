<?php
/**
 * @file   : 1.array_shift.php
 * @time   : 7:03
 * @date   : 2022/1/31
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

//array_shift() 函数的作用是删除数组中的第一个元素，并返回该元素的值。
//array_unshift() 函数的作用是将一个或多个元素插入到数组的开头，并返回新的数组。


$arr = array("a" => "red", "b" => "green", "c" => "blue");
$b   = array_shift($arr);
echo "弹出的元素为：" . $b;
echo PHP_EOL;
echo '────────────────────────';
echo PHP_EOL;
echo "弹出元素后原数组为：" . PHP_EOL;
print_r($arr);

/**
 * --output--
 * 弹出的元素为：red
 * ────────────────────────
 * 弹出元素后原数组为：
 * Array
 * (
 * [b] => green
 * [c] => blue
 * )
 */

array_unshift($arr, ["x" => "yellow"]);
echo "插入元素后原数组为：" . PHP_EOL;
print_r($arr);
//--output--
// 插入元素后原数组为：
// Array
// (
//     [0] => Array
//     (
//         [x] => yellow
//     )
//
//     [b] => green
//     [c] => blue
// )

// 注意：array_unshift() 函数无法插入关联元素（即键为字符串的元素），只能插入索引元素。
// 若要插入关联元素，则需要使用 array_merge() 等函数实现。
$arr = array_merge(["y"=>"black"], $arr);
// 或直接使用 + 运算符
$arr = ["z"=>"gray"]+ $arr;
echo "合并数组后为：" . PHP_EOL;
print_r($arr);
//--output--
// 合并数组后为：
//Array
//(
//[z] => gray
//[y] => black
//[0] => Array
//(
//        [x] => yellow
//)
//
//[b] => green
//[c] => blue
//)
