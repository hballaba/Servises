FROM alpine

RUN apk update 
RUN apk add supervisor openrc
RUN apk add nginx
RUN mkdir -p /www
RUN mkdir -p /run/nginx 
RUN mkdir -p /run/php #var/run/php www/run/php
RUN apk add php7-cli php7-fpm php7-mbstring php7-session php7-zip php7-json php7-imagick php7-xmlrpc php-mysqli unzip php-gettext mysql mysql-client

COPY supervisord.conf /etc/supervisord.conf
COPY wp_nginx_conf /etc/nginx/conf.d/default.conf
COPY setup_wordpress.sh tmp/setup_wordpress.sh
COPY wordpress-5.5.1-ru_RU.tar.gz wordpress-5.5.1-ru_RU.tar.gz

RUN chmod 777 tmp/setup_wordpress.sh

EXPOSE 5050

CMD sh tmp/setup_wordpress.sh