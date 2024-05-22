<?php
/**
 * @file   : save.php
 * @time   : 8:36
 * @date   : 2021/9/24
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

require "../vendor/autoload.php";

use FormBuilder\Response;
use Hiland\Utils\Web\RequestHelper;


// $input= RequestHelper::getInput("goodsName");

$input= $_POST['goodsName'];
$response = Response::success("表单提交成功:$input");
echo $response->getContent();
