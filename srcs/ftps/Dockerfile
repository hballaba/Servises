FROM alpine

RUN apk update
RUN apk add openssl vsftpd

RUN mkdir /etc/vsftpd/ssl

RUN openssl req -newkey rsa:2048 -x509 -days 365 -nodes \
-out /etc/vsftpd/ssl/vsftpd.crt -keyout /etc/vsftpd/ssl/vsftpd.key \
-subj "/C=RU/ST=Tatarstan/L=Kazan/O=School21/OU=hballaba/CN=localhost"


COPY setup_ftps.sh ./
COPY vsftpd.conf ./etc/vsftpd/vsftpd.conf

RUN chmod 777 ./setup_ftps.sh


RUN echo "root:root" | chpasswd

EXPOSE 20 21 2222

CMD sh setup_ftps.sh
