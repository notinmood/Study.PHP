// 以下是演示 node.js下的使用,需要先通过npm引入axios包

/**
 * 以下是调用npm安装的axios包,不是本地的AxiosStudy/axios-0.21.3.min.js文件
 */
import axios from 'axios';

//如果没有指定baseURL,那么此处的url必须是完整的路径
axios({
    url: 'http://localhost/PHP.Study/AxiosStudy/server.php',
    method: 'get'
}).then((response) => {
    console.log(response.data)
}).catch((reason) => {
    console.log(reason.response);
});

