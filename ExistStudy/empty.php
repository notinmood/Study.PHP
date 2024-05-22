<?php
/**
 * @file   : empty.php
 * @time   : 10:44
 * @date   : 2021/10/14
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

use Hiland\Utils\Data\ObjectHelper;

require "../vendor/autoload.php";

/**
 * PHP 的 if ($value) 和 if (!empty($value)) 的区别:
 *  -正常情况下两者功能相同
 *  -在对一个undefined变量的判断时，empty没有问题,但if()会出现警告
 */

$something = "something";
unset($something);

if ($something) {
    echo "YYY- 这是直接判断的情况,有值";
} else {
    echo "NNN- 这是直接判断的情况,没值";
};

echo PHP_EOL;

if (!empty($something)) {
    echo "YYY- 这是用!empty判断的情况,有值";
} else {
    echo "NNN- 这是用!empty判断的情况,没值";
};

echo PHP_EOL;


if (ObjectHelper::isExist($something)) {
    echo "YYY- 这是用ObjectHelper判断的情况,有值";
} else {
    echo "NNN- 这是用ObjectHelper判断的情况,没值";
};

echo PHP_EOL;
if (exist($something)) {
    echo "YYY- 这是用自定义exist判断的情况,有值";
} else {
    echo "NNN- 这是用自定义exist判断的情况,没值";
};


