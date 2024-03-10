文件目录

本项目已经部署到服务器上，可以直接访问
http://val.arorms.cn

如果要部署到本地，则需要下载相应环境，以下步骤以Linux Debian系统为例
1. 安装Apache2 Web服务器

    ```bash
    apt update
    apt install apache2
    systemctl enable --now apache2 #设置开机自启动
    ```bash

2. 配置网站设置
    设置文件/etc/apache2/sites-avaliable/xxx.conf，文件内容如下：

    ```ini
    <VirtualHost *:80>
        ServerName <域名>
        ServerAdmin webmaster@localhost
        DocumentRoot <源代码根目录>
        ErrorLog ${APACHE_LOG_DIR}/error.log
        CustomLog ${APACHE_LOG_DIR}/access.log combined
        #Include conf-available/serve-cgi-bin.conf
    </VirtualHost>
    ```

    然后启动虚拟机

    ```bash
    a2ensite xxx.conf
    systemctl reload apache2 #重新加载
    ```

3. 下载MySQL和PHP
    ```bash
    apt install mariadb-server #这里下载的是MariaDB，和MySQL一样
    apt install php libapache2-mod-php php-mysql

随后重新加载即可访问。