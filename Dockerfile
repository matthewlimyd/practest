# Using php 7.4 fpm
FROM php:7.4-fpm

# Install system dependencies
RUN apt-get update && apt-get install git zip unzip -y

# PHP extensions
RUN docker-php-ext-install pdo_mysql

# Download composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# /var/www/html
WORKDIR /var/www/html

# Copy web codes and dependencies 
COPY src/ .

# Install composer
RUN composer install --no-scripts --no-autoloader

# Install PHPUnit for unit test
RUN composer require --dev phpunit/phpunit ^9
RUN composer dump-autoload

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
