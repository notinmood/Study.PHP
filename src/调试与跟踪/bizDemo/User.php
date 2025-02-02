<?php
/**
 * @file   : User.php
 * @time   : 16:55
 * @date   : 2025/2/2
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHPStudy\调试与跟踪\bizDemo;
// 用户资料
class User{

    // 获取用户资料
    function get_user($user_id){

        // 获取用户讯息
        $oMessage = new Message;
        $user_message = $oMessage->get_message($user_id);

        $user_info = array(
                'user_id' => $user_id,
                'name' => 'fdipzone',
                'message' => $user_message
        );

        return $user_info;

    }

}
