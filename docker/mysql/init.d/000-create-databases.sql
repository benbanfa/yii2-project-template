CREATE DATABASE IF NOT EXISTS `db_app`;

CREATE USER 'db_app_user'@'%' IDENTIFIED BY 'db_app_pass';

GRANT ALL ON `db_app`.* TO 'db_app_user'@'%';

CREATE DATABASE IF NOT EXISTS `db_test`;

CREATE USER 'db_test_user'@'%' IDENTIFIED BY 'db_test_pass';

GRANT ALL ON `db_test`.* TO 'db_test_user'@'%';
