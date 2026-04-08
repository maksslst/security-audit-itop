FROM php:8.1-apache

RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libzip-dev \
    libxml2-dev \
    graphviz \
    zip \
    unzip \
    git \
    && docker-php-ext-install mysqli gd zip soap

RUN pecl install apcu && \
    docker-php-ext-enable apcu

RUN a2enmod rewrite

RUN docker-php-ext-install opcache

COPY docker/php/conf.d/99-itop.ini /usr/local/etc/php/conf.d/99-itop.ini

COPY itop/ /var/www/html/

RUN chown -R www-data:www-data /var/www/html

WORKDIR /var/www/html