FROM alpine

RUN apk update
RUN apk add mariadb mariadb-client openrc

COPY my.cnf /etc/mysql/
COPY setup_mysql.sh ./
COPY mysql.sql ./
RUN chmod +x ./setup_mysql.sh

VOLUME [ "/data/lib/mysql" ]

EXPOSE 3306

CMD sh setup_mysql.sh