CREATE DATABASE IF NOT EXISTS `app`;

CREATE USER 'app_user'@'%' IDENTIFIED BY 'app_pass';

GRANT ALL ON `app`.* TO 'app_user'@'%';

CREATE DATABASE IF NOT EXISTS `app_test`;

CREATE USER 'app_test_user'@'%' IDENTIFIED BY 'app_test_pass';

GRANT ALL ON `app_test`.* TO 'app_test_user'@'%';
