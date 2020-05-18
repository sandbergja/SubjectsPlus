FROM php:7.4.6-apache
COPY . /var/www/html/
RUN apt-get update && apt-get install -y zlib1g zlib1g-dev libpng-dev
RUN docker-php-ext-install pdo_mysql mysqli gettext gd
RUN a2enmod headers rewrite && service apache2 restart
