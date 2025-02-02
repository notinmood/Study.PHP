说明
--
1. 魔术属性__get_set 目录内是通过 `__set` 和 `__get` 动态使用对象属性的演示
2. 魔术方法__call_callStatic 目录内是通过 `__call` 和 `__callStatic` 动态使用对象方法的演示
>调用动态属性/方法的时候，IDE通常会在成员名称上用波浪线提示此成员不存在，但实际运行没有问题
> 
> 
如果想使用动态成员，又不让IDE波浪线提示成员不存在,那么就在类型上用 @注释方式，具体如下
1. 属性注释 `@property string $City`
2. 方式注释 实例方法: `@method string welcomeName()` 静态方法: `@method static string getFoo()`