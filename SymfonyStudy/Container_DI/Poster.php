<?php
/**
 * @file   : Poster.php
 * @time   : 20:30
 * @date   : 2021/9/30
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\SymfonyStudy\Container_DI;

class Poster
{
    private ?PostMatter $postMatter = null;

    public function __construct($postMatter)
    {
        $this->postMatter = $postMatter;
    }

    public function Post(): string
    {
        return "正在发送的物品信息为：". $this->postMatter->toString();
    }
}