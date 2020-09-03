FROM php:7.2-apache
RUN docker-php-ext-install mysqli
COPY ./php.ini $PHP_INI_DIR/php.ini
COPY ./ /var/www/html/
EXPOSE 80

