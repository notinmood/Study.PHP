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
//3、用spl_autoload_register加载.不为其传递函数参数.那么肯定加载不上目标类型.
spl_autoload_register();
$entity=new AutoLoadStudy2_entity();