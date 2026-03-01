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

COPY itop/ /var/www/html/

RUN chown -R www-data:www-data /var/www/html

RUN echo "short_open_tag=Off" > /usr/local/etc/php/conf.d/itop.ini

WORKDIR /var/www/html