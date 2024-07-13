<?php

/**Windows 系统下不支持 本功能
 * Class Arrow
 */
class Arrow
{

    public static Arrow $instance;

    /**
     * @return static
     */
    public static function getInstance(): static
    {
        if (null === self::$instance)
            self::$instance = new self();
        return self::$instance;
    }

    public function run($rb): void
    {

        $pid = pcntl_fork();
        if ($pid > 0) {
            pcntl_wait($status);
        } elseif ($pid === 0) {
            $cid = pcntl_fork();
            if ($cid > 0) {
                exit();
            } elseif ($cid === 0) {
                $rb();
            } else {
                exit();
            }
        } else {
            exit();
        }

    }
}

//离弦之箭---调用方法
$time_out = 30;
Arrow::getInstance()->run(function () use ($time_out) {
    //这里写我们要执行的代码
    sleep($time_out);
    var_dump("我是在异步里面的逻辑");
});

var_dump("我是在同步中的逻辑");
