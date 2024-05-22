<?php
/**
 * @file   : Member.php
 * @time   : 10:03
 * @date   : 2021/9/7
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\PatternStudy\StatePattern0;

use Hiland\Utils\IO\ConsoleHelper;

/**
 * 如果不使用状态模式,那么其内部逻辑(比如方法getDiscount),就会出现复杂的if/else森林
 */
class Member
{
    private int $score;

    public function setScore($score)
    {
        $this->score = $score;
    }

    public function getDiscount(): float
    {
        if ($this->score >= 1000) {
            ConsoleHelper::echoLine("执行优选会员的优惠政策0.8");
            return 0.8;
        } else {
            if ($this->score >= 800) {
                ConsoleHelper::echoLine("执行金牌会员的优惠政策0.85");
                return 0.85;
            } else {
                if ($this->score >= 500) {
                    ConsoleHelper::echoLine("执行银牌会员的优惠政策0.9");
                    return 0.9;
                } else {
                    ConsoleHelper::echoLine("执行普通会员的优惠政策0.95");
                    return 0.95;
                }
            }
        }
    }
}