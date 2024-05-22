<?php
/**
 * @file   : HighHandler.php
 * @time   : 19:54
 * @date   : 2021/9/6
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\PatternStudy\ChainOfResponsibilities1;

use Hiland\Utils\IO\ConsoleHelper;

class HighHandler extends Handler
{
    public function handle($request)
    {
        if ($request->level > 80) {
            ConsoleHelper::echoLine('HighHandler>>>处理中');
            return "【优秀】请求{$request->name}的级别为{$request->level},正在被HighHandler处理";
        } else {
            if ($this->successor) {
                ConsoleHelper::echoLine('HighHandler>>>向下');
                return $this->successor->handle($request);
            } else {
                return "【NNN】无法处理";
            }
        }
    }
}