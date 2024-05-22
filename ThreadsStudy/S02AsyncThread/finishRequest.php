<?php
/**
 * @file   : finishRequest.php
 * @time   : 10:56
 * @date   : 2021/9/15
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

/**
 * 这个方法, 在调用的时候, 会发送响应, 关闭连接. 但是不会结束PHP的运行.
 * 相比调用flush, 或者我之前介绍的加速你的Echo来说, 这个方法能更加干脆一些.
 * 但是这个方法仅仅支持 FPM环境
 */

echo '输出给客户端的内容';

if (!function_exists("fastcgi_finish_request")) {
    function fastcgi_finish_request()
    {
    }
}


fastcgi_finish_request();
sleep(3);

echo '放心吧，这里的内容并不会输出';

file_put_contents('log.txt', '这是客户端响应结束后，服务器段脚本继续执行后生成');

