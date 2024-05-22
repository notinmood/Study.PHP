<?php
/**
 * @file   : Card.php
 * @time   : 20:56
 * @date   : 2021/9/30
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\SymfonyStudy\Container_DI;

class Card extends PostMatter
{
    public function __construct($sender, $receiver)
    {
        $this->postMatterName = "明信片";
        parent::__construct($sender, $receiver);
    }
}