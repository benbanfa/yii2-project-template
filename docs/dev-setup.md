# 开发环境部署

说明：

- 须先安装 Docker Compose
- 部署各步骤的示例命令，都是在主机上项目根目录里执行

部署步骤：

一）创建 Docker Compose 配置文件

参考 docker-compose.local.yml.example 在项目根目录创建 docker-compose.local.yml 文件。

二）创建 Docker Compose 配置变量文件

参考 .env.example 在项目根目录创建 .env 文件。

三）启动 Docker Compose 环境

    docker-compose up -d

四）安装 PHP 包

    docker-compose exec --user dev php composer install

注意，如果要从传输协议采用 SSH 的私有仓库获取代码，则必须先添加正确的私钥至 `/home/dev/.ssh/id_rsa`。

五）安装前端资源文件

    docker run -it --rm -v $PWD:/code -w /code --user $(id -u) node:8-alpine yarn install

六）安装定时任务

    docker-compose exec --user root php crontab -u dev /code/docker/php/crontab

七）创建 Yii2 项目环境变量文件

参考 app.env.example 在项目根目录创建 app.env 文件。

八）创建 Yii2 项目本地配置文件

在 `config/params-local.php` 路径创建返回配置数组的 PHP 文件，内容示例：

    <?php
    
    return [];

九）初始化数据库表结构

    docker-compose exec --user dev php php yii migrate/up
