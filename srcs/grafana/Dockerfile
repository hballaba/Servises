FROM alpine
RUN apk update
RUN apk add openrc wget
RUN wget https://dl.grafana.com/oss/release/grafana-7.3.1.linux-amd64.tar.gz
RUN wget -q -O /etc/apk/keys/sgerrand.rsa.pub https://alpine-pkgs.sgerrand.com/sgerrand.rsa.pub
RUN wget https://github.com/sgerrand/alpine-pkg-glibc/releases/download/2.28-r0/glibc-2.28-r0.apk
RUN apk add glibc-2.28-r0.apk


RUN tar -zxvf grafana-7.3.1.linux-amd64.tar.gz
COPY setup_grafana.sh ./
RUN chmod +x ./setup_grafana.sh
EXPOSE 3000

COPY grafana.db grafana-7.3.1/data/grafana.db

CMD sh setup_grafana.sh