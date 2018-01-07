FROM ubuntu:14.04

RUN apt-get update \
	&& apt-get install -y \
		apache2 \
		php5 \
		php5-common \
		php5-cli \
		php5-mysql \
		php5-curl
RUN apt-get update \
	&& apt-get install -y \
		php-pear \
		php5-xdebug

#RUN echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini \
#  && echo "xdebug.remote_enable=on" >> /usr/local/etc/php/conf.d/xdebug.ini \
#  && echo "xdebug.remote_autostart=off" >> /usr/local/etc/php/conf.d/xdebug.ini

EXPOSE  80

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]