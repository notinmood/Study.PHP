<?php
/**
 * @file   : index.php
 * @time   : 16:18
 * @date   : 2021/10/11
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

use PHP\Study\SymfonyStudy\OptionsResolver\Mail;
require "../../vendor/autoload.php";

$option=[];
$option["host"]= "smtp.163.com";

// /**
//  * 因为Mail内部设定Option的缺省的各个参数,但没有useSsl,
//  * 如果强制使用不存在的参数,系统会报错.
//  */
// $option["useSsl"] = false;

$mail= new Mail($option);
echo $mail->getHost();
