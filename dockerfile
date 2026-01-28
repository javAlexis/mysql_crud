FROM php:7.1-apache

# Fix legacy Debian Stretch repositories (Archive)
RUN sed -i 's/deb.debian.org/archive.debian.org/g' /etc/apt/sources.list \
 && sed -i 's/security.debian.org/archive.debian.org/g' /etc/apt/sources.list \
 && sed -i '/stretch-updates/d' /etc/apt/sources.list

# Install system dependencies
RUN apt-get update && apt-get install -y --force-yes \
    unzip \
    git \
    libzip-dev \
    libxml2-dev

# Enable Apache require module and mod_rewrite
RUN a2enmod rewrite

# Install PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql zip mbstring xml

# Install Composer (Composer 2.2 is the last version supporting PHP 7.1)
COPY --from=composer:2.2 /usr/bin/composer /usr/bin/composer

# Set working directory to default web root
WORKDIR /var/www/html/

# Copy ALL files to preserve structure
COPY . /var/www/html/

# Install PHP dependencies (Composer is in app/)
# Install PHP dependencies (Composer is in app/)
WORKDIR /var/www/html/app
RUN composer config --no-plugins allow-plugins.composer/installers true
RUN composer install --no-dev --optimize-autoloader --ignore-platform-reqs

# MANUALLY FIX LITHIUM PATH:
# If composer installed it to libraries/unionofrad/lithium, move it to libraries/lithium
RUN if [ -d "libraries/unionofrad/lithium" ]; then \
      echo "Moving Lithium from vendor path to library path..."; \
      if [ -d "libraries/lithium" ]; then rm -rf libraries/lithium; fi; \
      mv libraries/unionofrad/lithium libraries/lithium; \
    fi

# Set Apache DocumentRoot using the custom config file
COPY docker/apache_render.conf /etc/apache2/sites-available/000-default.conf

# Enable mod_rewrite (often needed for frameworks)
RUN a2enmod rewrite

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80

# Start Apache with dynamic port handling
CMD sh -c "sed -i 's/80/${PORT:-80}/g' /etc/apache2/ports.conf && sed -i 's/:80>/:${PORT:-80}>/g' /etc/apache2/sites-available/000-default.conf && docker-php-entrypoint apache2-foreground"