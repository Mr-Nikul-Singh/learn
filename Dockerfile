# Apache वाला इमेज यूज़ कर रहे हैं क्योंकि अभी हमें Nginx Proxy की ज़रूरत नहीं है
FROM php:8.1-apache

# आपकी index.php को कंटेनर के सही फोल्डर में कॉपी करना
COPY . /var/www/html/

# पोर्ट 80 एक्सपोज़ करना
EXPOSE 80
