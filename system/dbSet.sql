-- 创建用户 valley 并设置密码
CREATE USER 'valley'@'localhost' IDENTIFIED BY '9*Z[Z]?z9zZo=+eQ';

-- 创建名为 Valley 的数据库
CREATE DATABASE IF NOT EXISTS Valley;

-- 将 valley 用户授予对 Valley 数据库的所有权限
GRANT ALL PRIVILEGES ON Valley.* TO 'valley'@'localhost';

-- 刷新权限
FLUSH PRIVILEGES;