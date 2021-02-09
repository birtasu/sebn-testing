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

RUN chmod -R 775 www/lib/
RUN chmod -R 775 www/img/

# composer
RUN curl -sS https://getcomposer.org/installer | php && \
	  mv composer.phar /usr/local/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER=1

COPY 000-default.conf /etc/apache2/sites-available/
