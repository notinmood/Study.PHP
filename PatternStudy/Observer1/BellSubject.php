<?php
/**
 * @file   : BellSubject.php
 * @time   : 20:17
 * @date   : 2021/9/8
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\PatternStudy\Observer1;

class BellSubject extends Subject
{
    public string $bellName= "上课铃";

    // public function notify(){
    //     foreach ($this->observers as $observer){
    //         $observer->response($this);
    //     }
    // }
}