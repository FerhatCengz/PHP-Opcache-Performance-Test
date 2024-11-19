FROM php:8.2.4-fpm

# Gerekli PHP uzantılarını yükle
RUN docker-php-ext-install opcache

# OpCache ayarlarını aktif hale getir
COPY php.ini /usr/local/etc/php/

# Çalışma dizini
WORKDIR /var/www/html
