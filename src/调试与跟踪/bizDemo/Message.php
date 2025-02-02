<?php
/**
 * @file   : Message.php
 * @time   : 16:55
 * @date   : 2025/2/2
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHPStudy\调试与跟踪\bizDemo;
// 用户讯息
class Message
{
    // 获取用户讯息
    function get_message($user_id)
    {

        $message = array(
                array('id' => 1, 'title' => 'message1'),
                array('id' => 2, 'title' => 'message2'),
        );

        // 加入跟踪调试
        $backtrace = debug_backtrace();
        var_dump(">>>以下是调用堆栈：");
        var_dump($backtrace);

        $files = get_included_files();
        var_dump(">>>以下是已加载的文件列表：");
        var_dump($files);

        return $message;
    }
}
