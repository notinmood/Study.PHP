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
// 一定注意set_include_path只能查找目录,不能加载类型,因此还是需要执行spl_autoload加载文件

//a、添加查找目录
const CLASS_DIR = "." . DIRECTORY_SEPARATOR . 'res' . DIRECTORY_SEPARATOR;
set_include_path(get_include_path() . PATH_SEPARATOR . CLASS_DIR);

//b、设置要查找文件的扩展名称
spl_autoload_extensions('.php');

//c、加载文件的文件名称(不包括命名空间,不包括扩展名称)
spl_autoload("MyEntity");

spl_autoload_register();
$entity = new MyEntity();