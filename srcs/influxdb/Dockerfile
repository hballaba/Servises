FROM alpine
RUN apk update
RUN apk add wget influxdb supervisor

RUN wget -q -O /etc/apk/keys/sgerrand.rsa.pub https://alpine-pkgs.sgerrand.com/sgerrand.rsa.pub
RUN wget https://github.com/sgerrand/alpine-pkg-glibc/releases/download/2.28-r0/glibc-2.28-r0.apk
RUN apk add glibc-2.28-r0.apk
RUN mkdir /etc/telegraf
RUN wget https://dl.influxdata.com/telegraf/releases/telegraf-1.16.1_linux_amd64.tar.gz
RUN tar -C . -xzf telegraf-1.16.1_linux_amd64.tar.gz


RUN echo "root:root" | chpasswd
COPY supervisord.conf /etc/supervisord.conf

RUN cp -r telegraf-1.16.1/* ./
RUN ./usr/bin/telegraf -sample-config --input-filter docker --output-filter influxdb > etc/telegraf/telegraf.conf

COPY supervisord.conf /etc/supervisord.conf

COPY setup_influxdb.sh ./
RUN chmod +x ./setup_influxdb.sh

VOLUME ["/var/lib/influxdb"]
EXPOSE 8086

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisord.conf"]