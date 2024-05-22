<?php


namespace CollectionStudy;


$arr1 = [1, 4, 7, 11];

$arr2 = [];
$arr2['a'] = 'aa';
$arr2['b'] = 'bb';

foreach ($arr1 as $item) {
    var_dump($item);
}
//--output--------------------------
//int(1)
//int(4)
//int(7)
//int(11)

foreach ($arr1 as $k => $v) {
    var_dump("k的值为{$k}；v的值为{$v}");
}
//--output--------------------------
//string(25) "k的值为0；v的值为1"
//string(25) "k的值为1；v的值为4"
//string(25) "k的值为2；v的值为7"
//string(26) "k的值为3；v的值为11"

foreach ($arr2 as $item) {
    var_dump($item);
}
//--output--------------------------
//string(2) "aa"
//string(2) "bb"


foreach ($arr2 as $k => $v) {
    var_dump("k的值为{$k}；v的值为{$v}");
}
//--output--------------------------
//string(26) "k的值为a；v的值为aa"
//string(26) "k的值为b；v的值为bb"