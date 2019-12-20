# 基于 Yii2 的项目模板

## Docker Compose 环境

配置了以下服务（service）：

| 服务名 | 主进程 | 说明
| --- | --- | ---
| mysql | MySQL 5.7 数据库 | 首次启动时自动创建 app（开发）、app_test（测试）数据库
| redis | Redis 4 数据库 | 主密码为 `1234`
| php | Supervisor 进程管理器 | 管理 PHP-FPM、定时任务和其他常驻进程
| nginx | Nginx 1.14 HTTP 服务器 | ~ |

### 启动环境

首次启动，必须参考 `.env.example` 在项目根目录创建 `.env` 文件。

执行命令：

    docker-compose up -d

### 在“php”容器里运行 shell

容器里有 ash，bash 两种 shell，以运行 bash 为例进行说明。

root 用户：

    docker-compose exec --user root php bash

dev 用户：

    docker-compose exec --user dev php bash

### 安装 PHP 包

    docker-compose exec --user dev php composer install

### 安装定时任务

    docker-compose exec --user root php crontab -u dev /code/docker/php/crontab

### 安装前端依赖

    docker run -it --rm -v $PWD:/code -w /code --user $(id -u) node:8-alpine yarn install

### 启、停 php 容器里由 Supervisor 管理的进程

以 PHP-FPM 为例来说明。

启动：

    docker-compose exec --user root php supervisorctl start php-fpm

重启：

    docker-compose exec --user root php supervisorctl restart php-fpm

停止：

    docker-compose exec --user root php supervisorctl stop php-fpm

### 打开 MySQL 命令行客户端

    docker-compose exec mysql mysql -u root -proot

### 执行 migration

    docker-compose exec --user dev php php yii migrate/up

