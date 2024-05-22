# 这是学习 composer 对第三方库，依赖版本管理的几个项目
> 总结：**锁头略尾**
>> ^ 仅仅对头部第一位锁定
> 
>> ~ 对尾部最后一位忽略
 
1. 每个 client 目录作为独立项目，单独运行。
2. 每个 client 项目的 composer.json 设置是不同的，因此他们加载进来的第三方依赖库的版本也是不同的。


## client1
在 composer.json 里面,即便`"minimum-stability": "stable"`,那么我们也依然可以加载指定具体版本的第三方依赖库,而这个库的稳定性可以比 stable 低，
比如 composer.json 里面对`"hiland/composerversionstudy":"dev-master"`是一个开发版本，也是可以加载成功的.

## client2
在 composer.json 里面,指定`"hiland/composerversionstudy":"~3.0.0"`,
加载 3.0 到 4.0(不包括4.0)之间最新的版本,(不包括RC，虽然 3.0.6-RC 比加载成功的 3.0.5 更高)
但因为全局上`"minimum-stability": "stable"`,

## client3
在 composer.json 里面,指定`"hiland/composerversionstudy":"~3.0.0"`,
加载 3.0.1 到 3.1.0(不包括3.1.0)之间最新的版本,(包括RC, beta, alpha 等,此处加载成功 3.0.6-RC)
但因为全局上`"minimum-stability": "dev"`

## client4
在 composer.json 里面,指定`"hiland/composerversionstudy":"^3.0"`,
加载 3.0 到 4.0(不包括4.0)之间最新的版本,(包括 RC, beta, alpha 等,此处加载成功 3.2.7-RC)
但因为全局上`"minimum-stability": "dev"`