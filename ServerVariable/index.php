<?php
/**
 * @file       --  index.php
 * @time       --  11 -- 12
 * @date       --  2021/10/10
 * @emailto    --  9727005@qq.com
 * @creator    --  ShanDong Xiedali
 * @company    --  HiLand & RainyTop
 */

require "../vendor/autoload.php";

use Hiland\Utils\Web\ServerHelper;

/**
 * 更多信息,参考如下文章
 * https:://www.cnblogs.com/meng529694498/articles/2918327.html
 */

echo "显示脚本文件的相对路径和文件名PHP_SELF -- " . $_SERVER["PHP_SELF"] . "<br>";
echo "显示当前脚本的路径 SCRIPT_NAME -- " . $_SERVER["SCRIPT_NAME"] . " <br>";
echo "显示当前运行脚本的文档根目录DOCUMENT_ROOT -- " . $_SERVER["DOCUMENT_ROOT"] . " <br>";
echo "显示当前执行脚本的绝对路径名SCRIPT_FILENAME -- " . $_SERVER["SCRIPT_FILENAME"] . "<br>";
echo "应用程序的web根目录ServerHelper::getWebRoot() -- " . ServerHelper::getWebRoot() . "<br>";
echo "应用程序的物理根目录ServerHelper::getPhysicalRoot() -- " . ServerHelper::getPhysicalRoot() . "<br>";

echo "显示服务器使用的CGI脚本规范GATEWAY_INTERFACE -- " . $_SERVER["GATEWAY_INTERFACE"] . " <br>";

echo "显示当前运行脚本所在服务器的IP地址SERVER_ADDR -- " . $_SERVER["SERVER_ADDR"] . "<br>";

echo "显示当前运行脚本服务器名称SERVER_NAME -- " . $_SERVER["SERVER_NAME"] . " <br>";

echo "显示当前运行脚本服务器标识SERVER_SOFTWARE -- " . $_SERVER["SERVER_SOFTWARE"] . "<br>";

echo "显示请求页面的通信协议的名称和版本SERVER_PROTOCOL -- " . $_SERVER["SERVER_PROTOCOL"] . " <br>";

echo "显示访问页面的请求方法REQUEST_METHOD -- " . $_SERVER["REQUEST_METHOD"] . "<br>";

echo "显示脚本开始运行时间REQUEST_TIME -- " . $_SERVER["REQUEST_TIME"] . " <br>";

echo "显示URL问号后的字符串QUERY_STRING -- " . $_SERVER["QUERY_STRING"] . "<br>";

echo "显示当前Accept请求的头信息HTTP_ACCEPT -- " . $_SERVER["HTTP_ACCEPT"] . "<br>";

echo "显示当前请求的字符信息HTTP_ACCEPT_CHARSET -- " . $_SERVER["HTTP_ACCEPT_CHARSET"] . " <br>";

echo "显示当前当前请求的Accept - Encoding头信息HTTP_ACCEPT_ENCODING -- " . $_SERVER["HTTP_ACCEPT_ENCODING"] . "<br>";

echo "显示当前请求的Accept-Language头信息HTTP_ACCEPT_LANGUAGE -- " . $_SERVER["HTTP_ACCEPT_LANGUAGE"] . " <br>";

echo "显示当前请求的Connection头信息HTTP_CONNECTION -- " . $_SERVER["HTTP_CONNECTION"] . "<br>";

echo "显示当前请求的Host头信息HTTP_HOST -- " . $_SERVER["HTTP_HOST"] . " <br>";

echo "显示当前页面的前一个页面的URL地址HTTP_REFERER -- " . $_SERVER["HTTP_REFERER"] . "<br>";

echo "显示当前请求的User-Agent的头信息HTTP_USER_AGENT -- " . $_SERVER["HTTP_USER_AGENT"] . " <br>";

echo "显示脚本是否可以通过HTTPS协议进行访问HTTPS -- " . $_SERVER["HTTPS"] . "<br>";

echo "显示浏览当前页面用户的IP地址REMOTE_ADDR -- " . $_SERVER["REMOTE_ADDR"] . " <br>";

echo "显示浏览当前页面用户的主机名REMOTE_HOST -- " . $_SERVER["REMOTE_HOST"] . "<br>";

echo "显示用户连接到服务器时所使用的端口REMOTE_PORT -- " . $_SERVER["REMOTE_PORT"] . " <br>";

echo "显示Apache配置文件中的SERVER_ADMIN参数设置情况SERVER_ADMIN -- " . $_SERVER["SERVER_ADMIN"] . " <br>";

echo "显示网络服务器使用的端口SERVER_PORT, 默认为80 -- " . $_SERVER["SERVER_PORT"] . "<br>";

echo "显示服务器版本和虚拟主机名的字符串SERVER_SIGNATURE -- " . $_SERVER["SERVER_SIGNATURE"] . " <br>";

echo "显示脚本在文件系统中的基本路径PATH_TRANSLATED -- " . $_SERVER["PATH_TRANSLATED"] . "<br>";

echo "显示访问当前页面的URI REQUEST_URI -- " . $_SERVER["REQUEST_URI"] . "<br>";

