<?php
/**
 * @file   : BuilderThinPerson.php
 * @time   : 15:54
 * @date   : 2021/8/14
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\PatternStudy\Builder01;

class BuilderThinPerson extends BuilderPerson
{
    public function buildHead()
    {
        $this->person->drawHead(10);
    }


    public function buildBody()
    {
        $this->person->drawBody(10);   //画胖小人只需将这边的数值修改，
        // 再生成一个类即可
    }

    public function buildLeftArm()
    {
        $this->person->drawLeftArm(5);
    }


    public function buildRightArm()
    {
        $this->person->drawRightArm(5);
    }

    public function buildLeftLeg()
    {
        $this->person->drawLeftLeg(7);
    }


    public function buildRightLeg()
    {
        $this->person->drawRightLeg(7);
    }
}