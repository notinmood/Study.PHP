<?php
/**
 * @file   : ThreadHelper.php
 * @time   : 10:19
 * @date   : 2021/9/15
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\ThreadsStudy\S01MultiThreads;

class ThreadHelper
{
    /**
     * @param ...$urls
     */
    public static function multiRun(...$urls)
    {
        //设置缓冲为0(也可以去php.ini设置)
        ini_set('output_buffering', 0);
        //打开输出缓冲区
        ob_start();

        //设置一个空数组
        $curl_Arr = [];

        $urlCount= count($urls);
        for ($i = 0; $i < $urlCount; $i++) {
            //开启curl连接
            $curl_Arr[$i] = curl_init($urls[$i]);
            //CURLOPT_RETURNTRANSFER 设置为1表示稍后执行的curl_exec函数的返回是URL的返回字符串，而不是把返回字符串定向到标准输出并返回TRUE；
            curl_setopt($curl_Arr[$i], CURLOPT_RETURNTRANSFER, 1);
        }

        //创建批处理cURL句柄
        $mh = curl_multi_init();

        foreach ($curl_Arr as $k => $ch) {
            //curl句柄入栈增加
            curl_multi_add_handle($mh, $ch);
        }
        $active = null;
        while (count($curl_Arr) > 0) {
            //发起curl_multi请求
            @curl_multi_exec($mh, $active);
            foreach ($curl_Arr as $k => $ch) {
                //获取句柄的返回值
                if ($result[$k] = curl_multi_getcontent($ch)) {
                    //输出结果
                    echo "$result[$k]\n";
                    ob_flush();
                    //把被释放的数据发送到浏览器
                    flush();
                    //关闭该句柄
                    curl_multi_remove_handle($mh, $ch);
                    unset($curl_Arr[$k]);
                }
            }
        }
        //关闭ouput_buffering机制
        ob_end_flush();
        //关闭"curl_mulit"句柄
        curl_multi_close($mh);
    }
}