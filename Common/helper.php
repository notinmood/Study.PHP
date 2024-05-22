<?php
/**
 * @file: helper.php
 * @time: 8:51
 * @date: 2021/8/10
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


/**
 * @param $name
 */
function sayBye($name)
{
    echo "Bye,$name";
}

if (!function_exists('sayHi')) {
    function sayHi($name)
    {
        echo "Hi,$name";
    }
}

function getName($preName, $lastName): string
{
    return $preName . " " . $lastName;
}