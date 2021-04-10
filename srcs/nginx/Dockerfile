FROM alpine

RUN apk update 
RUN apk add nginx openssl openssh supervisor

RUN mkdir -p /run/nginx 
RUN mkdir /etc/nginx/ssl

RUN openssl req -newkey rsa:2048 -x509 -days 365 -nodes \
-out /etc/nginx/ssl/mycert.pem -keyout /etc/nginx/ssl/mykey.key \
-subj "/C=RU/ST=Tatarstan/L=Kazan/O=School21/OU=hballaba/CN=localhost"
RUN mkdir -p /run/nginx mkdir /etc/nginx/ssl
RUN ssh-keygen -A
RUN adduser -D hballaba
RUN echo "hballaba:hballaba" | chpasswd

COPY supervisord.conf /etc/supervisord.conf

COPY my_nginx_conf /etc/nginx/conf.d/default.conf


EXPOSE 80 443 22
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisord.conf"]
