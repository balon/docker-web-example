FROM php:7.0-apache

COPY cfgs/router.conf /etc/apache2/sites-enabled/router.conf
COPY cfgs/default.conf /etc/apache2/sites-enabled/default.conf
COPY cfgs/phpinfo.conf /etc/apache2/sites-enabled/phpinfo.conf

COPY websites/router /srv/http/router/public
COPY websites/default /srv/http/default/public
COPY websites/phpinfo /srv/http/phpinfo/public

EXPOSE 17000
EXPOSE 18000
EXPOSE 19000

CMD /usr/sbin/apache2ctl -D FOREGROUND
