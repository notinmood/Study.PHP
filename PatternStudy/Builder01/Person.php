<?php
/**
 * @file   : Person.php
 * @time   : 15:44
 * @date   : 2021/8/14
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\PatternStudy\Builder01;

class Person
{
    public function drawHead(int $size)
    {
        echo "头的大小为：" . $size;
    }

    public function drawBody(int $size)
    {
        echo "身体的大小为：" . $size;
    }

    public function drawLeftArm(int $size)
    {
        echo "左胳膊的大小为：" . $size;
    }

    public function drawRightArm(int $size)
    {
        echo "右胳膊的大小为：" . $size;
    }

    public function drawLeftLeg(int $size)
    {
        echo "左腿的大小为：" . $size;
    }

    public function drawRightLeg(int $size)
    {
        echo "右腿的大小为：" . $size;
    }
}