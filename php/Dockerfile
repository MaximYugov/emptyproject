FROM php:8.1-fpm-alpine
WORKDIR /var/www
RUN docker-php-ext-install pdo_mysql
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer