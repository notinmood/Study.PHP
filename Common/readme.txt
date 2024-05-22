helper.php 是为了测试 composer.json 里面的自动加载 php 文件的配置节点而对应的文件,如下(具体见根目录的 composer.json 文件):

"autoload": {
    "files": [
      "Common/helper.php"
    ]
  }

说明：自动加载是 PSR-0 和 PSR-4 的标准。