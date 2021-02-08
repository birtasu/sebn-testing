FROM php:7.3-apache

WORKDIR /var/www/html

RUN docker-php-ext-install mysqli

RUN apt-get update \
    && apt-get install -y libzip-dev \
    && apt-get install -y zlib1g-dev \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-install zip

COPY ./ ./

RUN chmod -R 775 www/lib/
RUN chmod -R 775 www/img/

# composer
RUN curl -sS https://getcomposer.org/installer | php && \
	  mv composer.phar /usr/local/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER=1

COPY 000-default.conf /etc/apache2/sites-available/
