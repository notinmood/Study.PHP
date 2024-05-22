<?php
/**
 * @file   : setvalue0.php
 * @time   : 17:12
 * @date   : 2021/9/15
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

$url = 'http://www.baidu.com';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

curl_exec($ch);
curl_close($ch);
