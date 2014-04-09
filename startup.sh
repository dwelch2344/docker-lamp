#!/bin/bash

a2dissite default
apache2ctl graceful
/usr/bin/mysqld_safe &
