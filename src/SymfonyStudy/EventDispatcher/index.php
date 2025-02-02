<?php
/**
 * @file   : index.php
 * @time   : 9:17
 * @date   : 2021/10/1
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


/**
 * 1、监听事件的常规方式就是去注册一个监听器给事件派遣器。
 * 这个监听器可以监听一或多个事件——每当那些事件被派遣时它都会收到通知。
 * ────────────────────────
 * 2、另一种监听事件的方式是，通过event subscriber（订阅器）。
 * 一个事件订阅器，是一个PHP类，可以向派遣器精确通报它要订阅哪些事件。
 * 它实现了EventSubscriberInterface接口，里面有个单独的静态方法名为getSubscribedEvents()。
 * ════════════════════════
 * 如果要为多个事件设置侦听器，或者要在单个类中逻辑地将事件处理逻辑分组，
 * 则应考虑使用事件订阅者，因为它们可以将所有内容保留在一个地方。
 * 区别：
 * 1、监听器方式处理方法和事件的关联，是通过addListener的两个参数配合实现的.
 * $dispatcher->addListener("order.afterCreate", [DBBiz::class, "save"]);
 * 2、订阅器处理方法和事件的关联,放入具体的类型内部(DBBiz等),让具体的类型通过实现接口来挂接两者的关系.
 * $dispatcher->addSubscriber(new DBBiz());
 * ────────────────────────
 * 除此之外,两者逻辑完全相同
 */
