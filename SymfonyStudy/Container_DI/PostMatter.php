<?php
/**
 * @file   : PostMatter.php
 * @time   : 20:44
 * @date   : 2021/9/30
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\SymfonyStudy\Container_DI;

/**
 * 可邮寄物品abstract类
 */
abstract class PostMatter
{
    protected string $receiver;
    protected string $sender;
    protected string $postMatterName;

    public function __construct($sender, $receiver)
    {
        $this->receiver = $receiver;
        $this->sender = $sender;
    }

    /**
     * @return string
     */
    public function toString(): string
    {
        return "这是由{$this->sender}发给{$this->receiver}的{$this->postMatterName}!";
    }
}