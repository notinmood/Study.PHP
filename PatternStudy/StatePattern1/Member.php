<?php
/**
 * @file   : Member.php
 * @time   : 10:03
 * @date   : 2021/9/7
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\PatternStudy\StatePattern1;

class Member
{
    private $state;
    private $score;

    public function setState($state)
    {
        $this->state = $state;
    }

    public function setScore($score)
    {
        $this->score = $score;
    }

    public function getScore()
    {
        return $this->score;
    }

    public function getDiscount()
    {
        return $this->state->discount($this);
    }
}