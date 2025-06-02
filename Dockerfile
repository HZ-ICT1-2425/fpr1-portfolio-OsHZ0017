FROM php:apache
LABEL authors="mos77"

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
    libzip-dev libonig-dev libxml2-dev git default-mysql-client \
    && docker-php-ext-install pdo pdo_mysql

# Installing Composer
COPY --from=composer:2.8 /usr/bin/comoposer /usr/local/bin/composer

# Expose the preferred port
EXPOSE 89




