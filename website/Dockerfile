# [1] Obraz bazowy
FROM php:7.2-apache

# [2] Instalacja rozszerzeń i włączenie mod_rewrite
RUN apt-get update && \
    docker-php-ext-install mysqli && \
    a2enmod rewrite

# [3] Skopiowanie aplikacji do katalogu serwera www
COPY . /var/www/html/

# [4] Nadanie praw dostępu dla Apache
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html
