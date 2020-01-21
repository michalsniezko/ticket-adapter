FROM php:7.3-fpm

RUN apt-get update && apt-get install -y \
        zlib1g-dev \
        g++ git libicu-dev zip \
        libzip-dev \
        zip \
    && docker-php-ext-install intl opcache pdo_mysql \
    && pecl install apcu xdebug-2.7.0 \
    && docker-php-ext-enable apcu xdebug \
    && docker-php-ext-install zip

WORKDIR /app

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY . /app