<?php
/**
 * @file   : index.php
 * @time   : 16:53
 * @date   : 2025/2/2
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

// 引入类文件
require_once '../../../vendor/autoload.php';
use PHPStudy\调试与跟踪\bizDemo\Order;

// 获取用户订单资料
$order_id = 1000000;

$oOrder = new Order;
$order_info = $oOrder->get_order($order_id);
