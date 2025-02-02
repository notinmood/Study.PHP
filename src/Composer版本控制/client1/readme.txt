在composer.json里面,即便"minimum-stability": "stable",那么我们也依然可以加载指定具体版本的第三方依赖库,而这个库的稳定性可以比stable低，
比如composer.json里面对"hiland/composerversionstudy":"dev-master"是一个开发版本，也是可以加载成功的.