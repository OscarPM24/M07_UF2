FROM php:8.1-fpm

RUN docker-php-ext-install pdmysql

WORKDIR /app

CMD ["php", "artisan", "serve", "--host", "0.0.0.0"]