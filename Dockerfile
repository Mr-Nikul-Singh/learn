# 1. PHP-FPM का सबसे हल्का (Alpine) वर्जन इस्तेमाल करें
FROM php:8.1-fpm-alpine

# 2. काम करने की जगह सेट करें (Working Directory)
WORKDIR /var/www/html

# 3. अपने प्रोजेक्ट की सारी फाइलें कंटेनर के अंदर कॉपी करें
COPY . /var/www/html/

# 4. पक्का करें कि फाइलों का मालिक 'www-data' यूजर हो (Permissions)
RUN chown -R www-data:www-data /var/www/html

# 5. अंदर का दरवाजा (Port) खुला रखें
EXPOSE 9000

# 6. PHP-FPM इंजन को चालू करें
CMD ["php-fpm"]
