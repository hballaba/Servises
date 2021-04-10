tar -xzf phpmyadmin.tar.gz
mv phpMyAdmin-4.9.7-english /www/
mv /www/phpMyAdmin-4.9.7-english  /www/phpmyadmin

cp /tmp/config.inc.php /www/phpmyadmin

chmod -R 777 /etc/php7/php-fpm.conf
chmod  644 /www/phpmyadmin/config.inc.php

/usr/bin/supervisord -c /etc/supervisord.conf