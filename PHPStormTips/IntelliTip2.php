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

class IntelliTip2
{
    private $student;

    public function displayName(){
        /**
         * 给属性$student加入 instanceof 判断,也可以进行代码的智能提示
         */
        if($this->student instanceof Student){
            $this->student->getName();
        }
    }
}