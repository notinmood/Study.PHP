<?php
/**
 * @file   : Foo.php
 * @time   : 22:10
 * @date   : 2021/10/5
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\PHPStormTips;

use PHP\Study\PHPStormTips\res\Student;

class IntelliTip1
{
    private Student $student;

    public function displayName(){
        /**
         * 因为给属性$student指定了类型Student,因此在student后面,加入 -> 的时候,可以智能提示Student的成员列表
         */
        $this->student->getName();
    }
}