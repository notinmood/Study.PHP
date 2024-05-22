<?php
/**
 * @file   : EMail.php
 * @time   : 19:44
 * @date   : 2021/9/30
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\SymfonyStudy\Container_DI;

class Mail extends PostMatter
{
    public function __construct($sender, $receiver)
    {
        $this->postMatterName = "邮件";
        parent::__construct($sender, $receiver);
    }
}