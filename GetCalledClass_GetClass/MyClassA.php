<?php
/**
 * @user: ShanDong Xiedali
 * @date: 2021/8/3
 * @time: 16:43
 * @company: 海澜&润拓
 */

namespace PHP\Study\GetCalledClass_GetClass;

class MyClassA
{
    public function it_Class(){
        echo __CLASS__;
        echo PHP_EOL;
    }
    
    public function itCalledClass(){
        echo get_called_class();
        echo PHP_EOL;
    }

    public function itClass(){
        echo get_class();
        echo PHP_EOL;
    }


    public static function stCalledClass(){
        echo get_called_class();
        echo PHP_EOL;
    }

    public static function stClass(){
        echo get_class();
        echo PHP_EOL;
    }
}