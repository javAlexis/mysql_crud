FROM php:8.1-apache

# Install extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy the application code
COPY . /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Expose the port (Render sets default PORT to 10000, usually)
# We can't use $PORT in EXPOSE instruction, but it's good practice to document
EXPOSE 80

# Configure Apache to listen on dynamic PORT env var
# We use a shell command to substitute the port in Apache config at runtime
CMD sh -c "sed -i 's/80/${PORT:-80}/g' /etc/apache2/ports.conf && sed -i 's/:80>/:${PORT:-80}>/g' /etc/apache2/sites-available/000-default.conf && docker-php-entrypoint apache2-foreground"