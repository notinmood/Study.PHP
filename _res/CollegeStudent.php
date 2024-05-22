<?php
/**
 * @file   : CollegeStudent.php
 * @time   : 7:30
 * @date   : 2022/1/31
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\_res;

class CollegeStudent extends Student implements CanWork
{

    /**
     * @return void
     */
    public function work()
    {
        echo "大学生可以工作了";
    }
}