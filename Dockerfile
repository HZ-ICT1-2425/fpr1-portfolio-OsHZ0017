FROM php:8.2-apache
LABEL authors="mos77"

# Installing Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


# Working Directory
WORKDIR /var/www/html

# Allow URL rewriting
RUN a2enmod rewrite

# Specify the Apache DocumentRoot to point to your projects' public directory
# Update the apache config files
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Set up MySQL, Laravel dependencies and Git
RUN apt-get update && apt-get install -y \
    git curl unzip \
    && docker-php-ext-install pdo pdo_mysql mysqli

# Expose the preferred port
EXPOSE 80




