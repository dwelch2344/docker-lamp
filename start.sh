#!/bin/bash

if [ ! -f /mysql-configured ]; then
  /usr/bin/mysqld_safe &
  # sleep 10s
  # MYSQL_PASSWORD=`pwgen -c -n -1 12`
  # echo mysql root password: $MYSQL_PASSWORD
  # echo $MYSQL_PASSWORD > /mysql-root-pw.txt
  # mysqladmin -u root password $MYSQL_PASSWORD
  touch /mysql-configured
  # killall mysqld
  # sleep 10s
fi
#service apache2 start


echo 'Starting Apache in the foreground...'

read pid cmd state ppid pgrp session tty_nr tpgid rest < /proc/self/stat
trap "kill -TERM -$pgrp; exit" EXIT TERM KILL SIGKILL SIGTERM SIGQUIT

source /etc/apache2/envvars
apache2 -D FOREGROUND

echo 'End start.sh'
