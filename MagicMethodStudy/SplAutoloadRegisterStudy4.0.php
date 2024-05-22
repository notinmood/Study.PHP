<?php
/**
 * @file   : SplAutoloadRegisterStudy1.php
 * @time   : 10:37
 * @date   : 2021/8/11
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

use PHP\Study\MagicMethodStudy\res\MyEntity;

//4、用spl_autoload_register加载.不为其传递函数参数.要想加载不上目标类型,就需要设置include_path.
//因为没有参数spl_autoload_register被调用的时候,他会在include_path内查找目标文件.
// 一定注意set_include_path只能查找目录,不能加载类型,因此还是需要require语句加载目标文件
// (只是在这个时候不用给目标文件指定目录了)

const CLASS_DIR = "." . DIRECTORY_SEPARATOR . 'res' . DIRECTORY_SEPARATOR;
// Add your class dir to include path
set_include_path(get_include_path() . PATH_SEPARATOR . CLASS_DIR);
spl_autoload_extensions('.php');

require "MyEntity.php"; //不需要再次指定目录了,因为目录在set_include_path内已经设置完了.


spl_autoload_register();
$entity = new MyEntity();