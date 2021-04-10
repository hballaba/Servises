#!/bin/zsh
minikube start --vm-driver=virtualbox

eval $(minikube docker-env)

docker build -t nginx_img ./srcs/nginx
docker build -t phpmyadmin_img ./srcs/phpmyadmin
docker build -t mysql_img ./srcs/mysql
docker build -t wordpress_img ./srcs/wordpress
docker build -t grafana_img ./srcs/grafana
docker build -t ftps_img ./srcs/ftps
docker build -t influxdb_img ./srcs/influxdb

minikube addons enable metallb

kubectl apply -f ./srcs/yamls/configmap.yaml
kubectl apply -f ./srcs/yamls/persistent_volume.yaml

kubectl apply -f ./srcs/nginx/nginx.yaml
kubectl apply -f ./srcs/phpmyadmin/phpmyadmin.yaml
kubectl apply -f ./srcs/mysql/mysql.yaml
kubectl apply -f ./srcs/wordpress/wordpress.yaml
kubectl apply -f ./srcs/grafana/grafana.yaml
kubectl apply -f ./srcs/ftps/ftps.yaml
kubectl apply -f ./srcs/influxdb/influxdb.yaml