<?php
/**
 * @file   : 02.综合比较.php
 * @time   : 8:50
 * @date   : 2021/10/15
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace app\index\controller;

require "../vendor/autoload.php";

use ArrayIterator;
use ArrayObject;
use FormBuilder\Factory\Elm;

//引入迭代器
$fruits = array(
    "apple" => 'apple_value',//position =0
    "orange" => 'orange_value',//position =1
    "grape" => 'grape_value',
    "plum" => 'plum_value',
);

dump($fruits);

el('------------------普通数组遍历-----------------', true);

foreach ($fruits as $key => $value) {
    el($key . ":" . $value);
}

el('------------------使用ArrayObject迭代器遍历数组(foreach)-----------------');
$obj = new ArrayObject($fruits);//创建数组对象
foreach ($obj as $key => $value ) {
    el($key . ":" . $value);
}

el("────────────────────────使用ArrayObject内获取到的ArrayIterator遍历数组────────────────────────");
$it = $obj->getIterator();//获取迭代器
foreach ($it as $key => $value) {
    el($key . ":" . $value);
}

el("────────────────────────直接使用ArrayIterator迭代器遍历数组────────────────────────");
$arrayIterator= new ArrayIterator($fruits);
foreach ($arrayIterator as $key => $value) {
    el($key . ":" . $value);
}

el('------------------(while)-----------------');;

$it->rewind();//如果要使用current必须使用rewind
while ($it->valid()) {
    el($it->key() . ":" . $it->current());
    $it->next();
}

el("------------------跳过某些元素进行打印(while)-----------------");

$it->rewind();
if ($it->valid()) {
    $it->seek(1);//当前指针指向position=1
    while ($it->valid()) {
        el($it->key() . ":" . $it->current());
        $it->next();
    }
}

el('------------------用迭代器的key进行排序(ksort)-----------------');
$it->ksort();
foreach ($it as $key => $value) {
    el($key . ":" . $value);;
}

el('------------------用迭代器的value进行排序(asort)-----------------');
$it->asort();
foreach ($it as $key => $value) {
    el($key . ":" . $value);
}

