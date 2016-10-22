FROM webdevops/apache:ubuntu-16.04

MAINTAINER Ho Nhat Quang <hnquang112@yahoo.com.vn>

ARG PHP_SOCKET=php-fpm:9000

ENV WEB_PHP_SOCKET=$PHP_SOCKET

ENV WEB_DOCUMENT_ROOT=/var/www/laravel

EXPOSE 80 443

WORKDIR /var/www/laravel

ENTRYPOINT ["/opt/docker/bin/entrypoint.sh"]

CMD ["supervisord"]
