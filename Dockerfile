FROM ubuntu:precise

MAINTAINER David Welch <david@davidwelch.co>

RUN chsh -s /bin/bash
RUN apt-get -y update
RUN DEBIAN_FRONTEND=noninteractive apt-get -y install mysql-client mysql-server apache2 libapache2-mod-php5 pwgen python-setuptools vim-tiny php5-mysql curl wget apache2-mpm-itk

# Configure our vhosts
ADD site.vhost /etc/apache2/sites-available/site
RUN a2ensite site
RUN a2dissite default

# Configure our services
ADD conf/my.cnf /etc/mysql/my.cnf

# Setup boot scripts
ADD ./start.sh /start.sh
ADD ./foreground.sh /etc/apache2/foreground.sh
RUN chmod 755 /start.sh
RUN chmod 755 /etc/apache2/foreground.sh

# Start the commands
CMD ["/bin/bash", "/start.sh"]

# Expose ports to Host
EXPOSE 80
EXPOSE 3306
