<?php
/**
 * @file   : Observer.php
 * @time   : 20:13
 * @date   : 2021/9/8
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\PatternStudy\Observer1;

interface Observer
{
    public function response(BellSubject $subject);
}