<?php
/**
 * @file   : SplAutoloadRegisterStudy1.php
 * @time   : 10:37
 * @date   : 2021/8/11
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

use MagicMethodStudy\AutoLoadStudy2_entity;
//2、用spl_autoload_register加载.为其传递函数参数,在函数参数内加载类型对应的文件.
spl_autoload_register(function (){
    require "./AutoLoadStudy2_entity.php";
});
$entity=new AutoLoadStudy2_entity();