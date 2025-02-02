<?php
/**
 * @file   : Order.php
 * @time   : 16:54
 * @date   : 2025/2/2
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHPStudy\调试与跟踪\bizDemo;

// 订单资料
class Order
{
    // 获取订单资料
    function get_order($order_id)
    {
        $user_id = 1001;

        // 获取用户资料
        $oUser     = new User;
        $user_info = $oUser->get_user($user_id);

        // 订单资料
        $order_info = array(
                'order_id' => $order_id,
                'order_name' => 'my order',
                'user_info' => $user_info,
        );

        return $order_info;

    }

}
