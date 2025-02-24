<?php
/**
 * @file   : 4.in_array和array_searh的异同.php
 * @time   : 12:01
 * @date   : 2025/2/6
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

//总结：in_array()函数和array_search()函数都是用来判断某个值是否存在于数组中，但是它们的区别在于：
// 1. in_array()函数返回的是布尔值，
// 2. array_search()函数返回的是键名。(键名称或索引有可能是数字0，因此判断结果可能出现误判)


// 1. in_array()函数
// in_array()函数用于判断一个值是否存在于数组中，如果存在则返回true，否则返回false。
// 语法：in_array(needle, haystack, strict)
// 参数：
// needle：待查找的值
// haystack：数组
// strict：是否进行类型检查，默认false，表示不进行类型检查。

// 2. array_search()函数
// array_search()函数用于在数组中搜索给定的值，并返回其键名。如果值不存在，则返回false。
// 语法：array_search(needle, haystack, strict)
// 参数：
// needle：待查找的值
// haystack：数组
// strict：是否进行类型检查，默认false，表示不进行类型检查。

// 3. 相同点
// 1. 都是用来判断某个值是否存在于数组中。
// 2. 都可以指定是否进行类型检查。

// 4. 不同点
// 1. in_array()函数的第二个参数haystack可以是数组或对象，而array_search()函数的第二个参数haystack只能是数组。
// 2. in_array()函数的第三个参数strict表示是否进行类型检查，默认false，表示不进行类型检查。而array_search()函数的第三个参数strict表示是否区分大小写，默认false，表示不区分大小写。
// 3. in_array()函数的效率比array_search()函数高。
// 4. array_search()函数返回的是键名，而in_array()函数返回的是布尔值。

// 5. 示例
$arr = array("apple", "banana", "orange");

// 1. in_array()函数
$result = in_array("apple", $arr);
print($result); // true
if ($result) {
    echo "元素存在于数组中";
} else {
    echo "元素不存在于数组中";
}

// 2. array_search()函数
$result = array_search("apple", $arr);
print($result); // 0 (键名)

if ($result !== false) {
    echo "元素存在于数组中";
} else {
    echo "元素不存在于数组中";
}
