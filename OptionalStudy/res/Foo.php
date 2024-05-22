<?php
/**
 * @file   : Foo.php
 * @time   : 9:02
 * @date   : 2021/9/9
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\OptionalStudy\res;

class Foo
{
    public function exist(): Bar
    {
        return new Bar();
    }

    public function null()
    {
        return null;
    }
}