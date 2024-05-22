<?php
/**
 * @file   : 查找数字.php
 * @time   : 8:41
 * @date   : 2021/8/25
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


$str = "请注意：有谁知道30901.5号路怎么走？这个因为我买了100块的烧饼和7901的钥匙了，那个对了，我再拿个30000";
$pattern = '/(\d+\.?\d+)/';

//$pattern = '/(\d+)\.?(\d+)/';
// $str = "42.234 EUR 53.218 AUD CAD97.164 311.151 MYR 125.042 NZD GBP84.270 SGD60.227 USD134.400";

if (preg_match_all($pattern, $str, $match)) {
    echo '<pre>';
    if (isset($match[0])) {
        print_r($match[0]);
    }
    echo '</pre>';
} else {
    echo '没有找到！';
}
