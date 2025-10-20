FROM php:8.2-fpm

# Установим расширения по необходимости (пример: pdo_mysql)
RUN docker-php-ext-install pdo pdo_mysql

# Копируем только код (в контейнере будет /var/www/html)
WORKDIR /var/www/html
COPY php.ini /usr/local/etc/php/php.ini

# Убедимся в правах
RUN chown -R www-data:www-data /var/www/html