<?php
/**
 * @file   : IncludePathStudy.php
 * @time   : 9:12
 * @date   : 2021/8/11
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

/**
 * @file   : index.php
 * @time   : 8:56
 * @date   : 2021/8/11
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


use Hiland\Utils\IO\ConsoleHelper;

include "../vendor/autoload.php";

//1、缺省情况下会输出php.ini内定义的环境变量include_path
$includePath = get_include_path();
ConsoleHelper::echoLine($includePath);
//--output────────────────────────
// .;c:\php\includes

// 2、通过代码可以为其设置新的值
const CLASS_DIR = ".".DIRECTORY_SEPARATOR.'class'.DIRECTORY_SEPARATOR;
// Add your class dir to include path
set_include_path(get_include_path() . PATH_SEPARATOR . CLASS_DIR);
$includePath = get_include_path();
ConsoleHelper::echoLine($includePath);
//--output────────────────────────
// .;c:\php\includes;.\class\

