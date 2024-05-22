<?php
/**
 * @file   : index.php
 * @time   : 22:09
 * @date   : 2021/9/23
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

/**
 * 改进责任链
 * 标准的责任链我们可以看见上面的示例，最明显的特征就是解耦了各个判断的对象，要改哪个判断语句我们可以直接在那个对象中去修改，不用再去关注繁杂的 if else 或者 switch case 了，但是传统的责任链依然有一些麻烦的地方
 * 麻烦点：
 * Handler 中的handlerRequest()方法往往不是一个，可能有多个
 * bentley.handlerRequest(car)这样的写法有不好的地方，万一 Bentley 这个类被我们删掉了怎么办，又要去改这一行代码吗？我们能去设置一个责任链的头结点吗？
 * 如果 handlerRequest() 方法有多个，同时我们假如有个 head 头结点，那么开始遍历责任链我们应该让 head 调用哪一个 handlerRequest() 方法呢？或者专门设置一个start()？还有如果我们想从责任链中任意一个结点开始遍历呢？
 * 责任链上各个结点调用setSuccessor()来组成完整的链表，但是万一哪个对象我们不需要了，则代码我们需要重新串起来，有些麻烦，有简单的方法不去重新 set，比如说直接删除就行？
 * 我们再来看一些这个 demo 优势就显而易见了，它可以通过 head.start() 的方式启动责任链，而不需要通过指定某一个 handlerRequest 方法来启动，并且即使 BentleyHandler 被我们删除，也无需修改head.start()，
 * 还有一个好处，那就是由于 start 方法作为抽象类 handler 的非抽象方法，意味着，我们可以在责任链任意一个结点调用 start 都可以正常的遍历责任链
 * 我们还可以发现setSuccessor()方法有返回值，这样我们可以连续不断的 setSuccessor，即使中间有某一种 Handler 被我们剔除我们可以直接删除个 setSuccessor 方法，而不是像之前一样还要考虑修改代码时候承上启下的 handler 之间的关系
 * 参考: https://abcnull.blog.csdn.net/article/details/107565909?utm_medium=distribute.pc_relevant.none-task-blog-2%7Edefault%7ECTRLIST%7Edefault-1.no_search_link&depth_1-utm_source=distribute.pc_relevant.none-task-blog-2%7Edefault%7ECTRLIST%7Edefault-1.no_search_link
 */

require "../../vendor/autoload.php";

// 责任链中的各个对象
use PHP\Study\PatternStudy\ChainOfResponsibilities3\BentleyHandler;
use PHP\Study\PatternStudy\ChainOfResponsibilities3\HeadHandler;
use PHP\Study\PatternStudy\ChainOfResponsibilities3\LamborghiniHandler;
use PHP\Study\PatternStudy\ChainOfResponsibilities3\RollsRoyceHandler;
use PHP\Study\PatternStudy\ChainOfResponsibilities3\TailHandler;


$head = new HeadHandler();
$bentley = new BentleyHandler();
$rollsRoyce = new RollsRoyceHandler();
$lamborghini = new LamborghiniHandler();
$tail = new TailHandler();

// 构建一条完整责任链（创建单链表）
$head->setSuccessor($bentley)->setSuccessor($rollsRoyce)->setSuccessor($lamborghini)->setSuccessor($tail);

// 通过责任链一家家的排查，宾利->劳斯莱斯->兰博基尼，最终找到车型！
$car = "兰博基尼";
$status = "维修";
$head->start($car, $status);

