FROM php:8.2-fpm

WORKDIR /var/www/html/demo7000

# extensions (optional)
RUN docker-php-ext-install mysqli pdo pdo_mysql

EXPOSE 9000
