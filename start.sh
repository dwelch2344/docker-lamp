#!/bin/bash

# if [ ! -f /mysql-configured ]; then
#   /usr/bin/mysqld_safe &
#   # sleep 10s
#   # MYSQL_PASSWORD=`pwgen -c -n -1 12`
#   # echo mysql root password: $MYSQL_PASSWORD
#   # echo $MYSQL_PASSWORD > /mysql-root-pw.txt
#   # mysqladmin -u root password $MYSQL_PASSWORD
#
#   mysql -u root -e "GRANT ALL ON *.* to root@'%'; FLUSH PRIVILEGES" mysql
#   touch /mysql-configured
#   echo 'mysql configured'
#   killall mysqld
#   # sleep 10s
# fi
#service apache2 start

/usr/bin/mysqld_safe &
sleep 5s
mysql -u root -e "GRANT ALL ON *.* to root@'%'; FLUSH PRIVILEGES" mysql
echo 'Setup MySQL...'

echo 'Starting Apache in the foreground...'

read pid cmd state ppid pgrp session tty_nr tpgid rest < /proc/self/stat
trap "kill -TERM -$pgrp; exit" EXIT TERM KILL SIGKILL SIGTERM SIGQUIT

chmod -R 777 /var/www

source /etc/apache2/envvars
apache2 -D FOREGROUND

echo 'End start.sh'
