#!bin/sh

rc default
/etc/init.d/mariadb setup
rc-service mariadb start

echo "CREATE DATABASE wordpress;" | mysql
echo "GRANT ALL PRIVILEGES ON * . * TO 'admin'@'%' IDENTIFIED BY 'admin';" | mysql
echo "FLUSH PRIVILEGES;" | mysql
mysql wordpress -u root --password= < mysql.sql

rc-service mariadb stop
/usr/bin/mysqld_safe
