#!bin/sh

tar -xzf wordpress-5.5.1-ru_RU.tar.gz
mv wordpress /www/
chmod -R 777 www/wordpress

/usr/bin/supervisord -c /etc/supervisord.conf

