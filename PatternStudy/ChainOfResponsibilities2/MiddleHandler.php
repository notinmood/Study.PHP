<?php
/**
 * @file   : MiddleHandler.php
 * @time   : 19:53
 * @date   : 2021/9/6
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\PatternStudy\ChainOfResponsibilities2;

use Hiland\Utils\IO\ConsoleHelper;

class MiddleHandler extends Handler
{
    public function handle($request)
    {
        if ($request->level <= 80) {
            ConsoleHelper::echoLine('MiddleHandler>>>处理中');
            return "【良好】请求{$request->name}的级别为{$request->level},正在被MiddleHandler处理";
        } else {
            $nextNode= $this->linkedListNode->next;
            if ($nextNode) {
                ConsoleHelper::echoLine('MiddleHandler>>>向下');
                return $nextNode->value->handle($request);
            } else {
                return "【NNN】无法处理";
            }
        }
    }
}