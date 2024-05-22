<?php
/**
 * @file   : Mail.php
 * @time   : 12:09
 * @date   : 2021/10/4
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\SymfonyStudy\OptionsResolver;

use PHP\Study\SymfonyStudy\EventDispatcher\Listener01\SecurityHelper;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Mail
{
    private array $option;

    public function __construct($option)
    {
        $resolver = new OptionsResolver();

        /**
         * 设置初始默认值
         */
        $resolver->setDefaults([
            "host" => "smtp.qq.com",
            "port" => "465",
            "userName" => "myName",
            "password" => "123456",
        ]);

        /**
         * 解析传递过来的参数数组
         */
        $this->option = $resolver->resolve($option);
    }

    public function sendMail($from, $to)
    {
        echo "这是一封由{$from}发送到{$to}的邮件!";
    }

    public function getHost()
    {
        return self::getOptionItem("host");
    }

    public function getOptionItem($key)
    {
        return $this->option[$key];
    }
}