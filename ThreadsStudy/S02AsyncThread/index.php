<?php
/**
 * @file   : index.php
 * @time   : 18:37
 * @date   : 2021/9/14
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

use PHP\Study\ThreadsStudy\S02AsyncThread\ThreadHelper;

require "../../vendor/autoload.php";



$data = array('name' => 'guoyu', 'pwd' => '123456');
$url = 'http://localhost/PHP.Study/ThreadsStudy/S02AsyncThread/server.php';

ThreadHelper::request_by_fsockopen($url, $data, true);

echo 'A.php success';
