FROM php:8.2-fpm

WORKDIR /var/www/html

# 👇 ये जरूरी है
COPY . /var/www/html

RUN chown -R www-data:www-data /var/www/html

EXPOSE 9000
