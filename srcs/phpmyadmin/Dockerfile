FROM alpine

RUN apk update 
RUN apk add php7-cli php7-fpm php7-mbstring php7-session php7-zip php7-json php7-imagick php7-xmlrpc php-mysqli unzip php-gettext
RUN apk add supervisor openrc
RUN apk add nginx

RUN mkdir -p /run/nginx 
RUN mkdir -p /www
RUN mkdir /tmp/php_sessions

COPY supervisord.conf /etc/supervisord.conf

COPY config.inc.php /tmp/config.inc.php
COPY setup_phpmyadmin.sh /tmp/setup_phpmyadmin.sh
COPY phpMyAdmin-4.9.7-english.tar.gz phpmyadmin.tar.gz

COPY php_nginx_conf /etc/nginx/conf.d/default.conf

RUN chmod 777 tmp/setup_phpmyadmin.sh


EXPOSE 5000

CMD sh tmp/setup_phpmyadmin.sh