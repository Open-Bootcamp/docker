FROM php:8-fpm-buster

ARG TIMEZONE

# Use the default production configuration
COPY ./php.ini /usr/local/etc/php/conf.d/docker-php-config.ini

# Install system dependencies
RUN apt-get update && apt-get install -y git unzip \
    && pecl install \
        apcu \
        xdebug \
        redis \
    && docker-php-ext-enable \
        apcu \
        xdebug \
        redis

# Install PHP extensions Type docker-php-ext-install to see available extensions
RUN docker-php-ext-install pdo pdo_mysql

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set timezone
RUN ln -snf /usr/share/zoneinfo/${TIMEZONE} /etc/localtime && echo ${TIMEZONE} > /etc/timezone
RUN printf '[PHP]\ndate.timezone = "%s"\n', ${TIMEZONE} > /usr/local/etc/php/conf.d/tzone.ini
RUN "date"

# Enable PHP XDebug Extension
COPY ./xdebug.ini /tmp/xdebug.ini
RUN cat /tmp/xdebug.ini >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN rm /tmp/xdebug.ini

# Set working directory
WORKDIR /var/www