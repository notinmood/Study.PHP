<?php
/**
 * @file: MyClassB.php
 * @date: 2021/8/4
 * @time: 9:19
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\ConstructStudy;

class MyClassB extends MyClassA
{
    public function __construct()
    {
        //parent::__construct();
        echo PHP_EOL."[BBB] i am in MyClassB!";
    }
}