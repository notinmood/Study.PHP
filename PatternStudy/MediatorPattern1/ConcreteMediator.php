<?php
/**
 * @file   : ConcreteMediator.php
 * @time   : 17:06
 * @date   : 2021/9/23
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\PatternStudy\MediatorPattern1;

use Hiland\Utils\Data\ArrayHelper;

/**
 * 具体中介者
 */
class ConcreteMediator extends Mediator
{
    private array $colleagues = [];

    public function register(Colleague $colleague)
    {
        if (!ArrayHelper::contains($this->colleagues, $colleague)) {
            $colleague->setMedium($this);
            $this->colleagues[] = $colleague;
        }
    }

    public function relay(Colleague $colleague)
    {
        foreach ($this->colleagues as $item) {
            if ($item != $colleague) {

                /**
                 * $item 肯定是Colleague类型;之所以加入如下 instanceof判断,是为了$item->之后的代码提示
                 */
                if ($item instanceof Colleague) {
                    $item->receive();
                }
            }
        }
    }
}