#!bin/sh
cp -r telegraf-1.16.1/* ./
/usr/bin/supervisord -c /etc/supervisord.conf
