<?php
/**
 * @file: index.php
 * @date: 2021/8/4
 * @time: 11:11
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

use Hiland\Utils\IO\ConsoleHelper;

require_once "../vendor/autoload.php";

ConsoleHelper::echoLine("__FILE__的值为:" . __FILE__);
ConsoleHelper::echoLine("__DIR__的值为:" . __DIR__);

echo "pathinfo────────────────────────", PHP_EOL;
$fileFullName = __FILE__;
echo pathinfo($fileFullName, PATHINFO_EXTENSION), PHP_EOL;
echo pathinfo($fileFullName, PATHINFO_BASENAME), PHP_EOL;
echo pathinfo($fileFullName, PATHINFO_DIRNAME), PHP_EOL;
echo pathinfo($fileFullName, PATHINFO_FILENAME), PHP_EOL;
var_dump(pathinfo($fileFullName, PATHINFO_ALL)); //返回null,奇怪
var_dump(pathinfo($fileFullName));

echo "realpath────────────────────────", PHP_EOL;
//realpath()必须传递真实的物理路径,可以是目录路径也可以文件路径,路径可以是绝对路径也可以说相对路径.
// 路径都会转换成当前操作系统支持的路径分隔符,并且路径末尾不包含 斜线结束符
// PHP realpath路径函数会检测path指向的目标文件（或文件夹）是否真实存在，相当于调用了fileexists(path)。
// 1、如果目标文件存在且不是符号连接(linux下俗称“软链接”，windows下叫“快捷方式”)，则返回该文件的绝对路径名（不包含’/./’ 或 ‘/../’。）
// 2、如果目标文件不存在，则realpath()返回FALSE。
// 3、如果目标文件是符号连接，则realpath()返回FALSE。
$myPath = "E:\\myworkspace\\MyStudy\\PHP\\PathStudy\\index.php";
echo "文件的路径:" . realpath($myPath) . PHP_EOL;
$myPath = "E:/myworkspace/MyStudy/PHP/PathStudy/";
echo "目录的路径:" . realpath($myPath) . PHP_EOL;
$myPath = "E:/myworkspace2/MyStudy/PHP/PathStudy/";
echo "目录的路径:" . realpath($myPath) . PHP_EOL;
$myPath = ""; //
echo "目录的路径:" . realpath($myPath) . PHP_EOL;
echo "目录的路径:" . realpath('.\MyPath.php') . PHP_EOL;

echo "basename────────────────────────", PHP_EOL;
echo "1) " . basename("/etc/sudoers.d", ".d") . PHP_EOL;
echo "2) " . basename("/etc/sudoers.d") . PHP_EOL;
echo "3) " . basename("/etc/passwd") . PHP_EOL;
echo "4) " . basename("/etc/") . PHP_EOL;
echo "5) " . basename(".") . PHP_EOL;
echo "6) " . basename("/");
echo "dirname────────────────────────", PHP_EOL;
$myPath = "E:\\myworkspace\\MyStudy\\PHP\\PathStudy\\index.php";
echo "dirname:" . dirname($myPath) . PHP_EOL;
$myPath = "E:\\myworkspace\\MyStudy\\PHP\\PathStudy";
echo "dirname:" . dirname($myPath) . PHP_EOL;