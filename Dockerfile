# We're building form the latest stable PHP official image
FROM php:8.2-apache
LABEL authors="mos77"

# Installing composer from the official website
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


# Setting a working Directory, in order to ensure Apache knows where we want things to get done
WORKDIR /var/www/html

# Allow Apache to rewrite URLS  where neccesary
RUN a2enmod rewrite

# Specify the Apache DocumentRoot to point to your projects' public directory
# Update the apache config files
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

# Search through the Apache Config files to change every instance of the old document root to our newly set one.
# This ensures the config doesn't goe all funky wunky. Keeps it functional!
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Set up MySQL, Laravel dependencies and Git
RUN apt-get update && apt-get install -y \
    git curl unzip \
    && docker-php-ext-install pdo pdo_mysql mysqli

# Expose the preferred port
EXPOSE 80




