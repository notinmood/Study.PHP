<?php
/**
 * @file   : Student.php
 * @time   : 20:52
 * @date   : 2021/10/14
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\MagicMethodStudy\MethodFromEntityToStatic;

class Student
{
    /**
     * @param string $language
     * @return string
     */
    public function getNation(string $language = "zh"): string
    {
        switch ($language) {
            case "zh":
            case "cn":
                return "中国人";
            default:
                return "Chinese";
        }
    }

    private $instance = null;

    public static function __callStatic($method, $params)
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
            call_user_func_array([self::$instance, $method], $params);
        }
    }
}