# PHP-FPM का हल्का वर्जन
FROM php:8.2-fpm-alpine

# काम करने की जगह
WORKDIR /var/www/html

# आपका कोड कॉपी करें
COPY . /var/www/html/

# पोर्ट 9000 पर PHP-FPM चलेगा
EXPOSE 9000
CMD ["php-fpm"]
