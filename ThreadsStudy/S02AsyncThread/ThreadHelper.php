<?php
/**
 * @file   : ThreadHelper.php
 * @time   : 9:24
 * @date   : 2021/9/15
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\ThreadsStudy\S02AsyncThread;

class ThreadHelper
{
    public static function request_by_fsockopen($url, $post_data = array(), $useAsync = true)
    {
        $url_array = parse_url($url);
        $hostname = $url_array['host'];
        $port = $url_array['port'] ?? 80;
        @$requestPath = $url_array['path'] . "?" . $url_array['query'];
        $fp = fsockopen($hostname, $port, $errno, $errstr, 10);

        if (!$fp) {
            echo "$errstr ($errno)";
            return -1;
        }

        stream_set_blocking($fp, 0); //非阻塞

        $method = "GET";

        if (!empty($post_data)) {
            $method = "POST";
        }

        $header = "$method $requestPath HTTP/1.1\r\n";
        $header .= "Host: $hostname\r\n";

        if (!empty($post_data)) {
            $_post = [];
            foreach ($post_data as $k => $v) {
                $_post[] = $k . "=" . urlencode($v);//必须做url转码以防模拟post提交的数据中有&符而导致post参数键值对紊乱
            }

            $_post = implode('&', $_post);
            $header .= "Content-Type: application/x-www-form-urlencoded\r\n";//POST数据
            $header .= "Content-Length: " . strlen($_post) . "\r\n";//POST数据的长度
            $header .= "Connection: Close\r\n\r\n";//长连接关闭
            $header .= $_post; //传递POST数据
        } else {
            $header .= "Connection: Close\r\n\r\n";//长连接关闭
        }

        fwrite($fp, $header);

        if (!$useAsync) {
            $response = "";
            while (!feof($fp)) {
                $response .= fgets($fp);
            }

            $result = "";
            if (substr_count($response, "200 OK") > 0)      // Check the status of the link
            {
                /**
                 * 基于header和body是通过两个回车换行来分割的，所以可以通过如下代码实现
                 */
                list($header, $body) = explode("\r\n\r\n", $response, 2);
                $result = $body;
            } else if (strlen($response) < 15)                // Cope with wierd non standard responses
            {
                $result = -1;
            } else                                            // Cope with a standard error response
            {
                $result = substr($response, 9, 3);
            }

            echo $result;
        }


        fclose($fp);
    }
}