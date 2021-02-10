FROM php:7.3-apache

WORKDIR /var/www/html

# system dependecies
  RUN apt-get update && apt-get install -y \
     git \
     libicu-dev \
     libpq-dev \
     unzip \
     zlib1g-dev \
     libonig-dev \
     libzip-dev

# PHP dependencies
  RUN docker-php-ext-install \
      intl \
      mbstring \
      pdo \
      pdo_mysql \
      mysqli \
      zip

COPY ./ ./

COPY 000-default.conf /etc/apache2/sites-available/
