#
# STAGE 2: php
#
FROM registry.tools.orange-sonatel.com/php/php74-ubuntu-apache

ENV APP_SECRET=6cc4a204c1d80435da1163eed5b8dec5

COPY . /var/www/html

#RUN useradd -d /var/www/html root
#RUN echo 'root:sonatel@221' | chpasswd

RUN chmod 777 /tmp/
RUN chown -R www-data:www-data /var/www/html

RUN chmod o+rwx /var/lib/php/sessions/
RUN chown -R www-data:www-data /var/lib/php/sessions/

RUN apt-get update;exit 0
RUN apt-get -y install openssh-server openssh-client
RUN service ssh start

RUN sleep 10
EXPOSE 80 80/tcp
EXPOSE 22
