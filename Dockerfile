# Use an official PHP runtime with Apache
FROM php:8.0-apache

# Copy application files to the web server root
COPY . /var/www/html/

# Expose port 80 (default for Apache)
EXPOSE 80

# Set permissions (optional)
RUN chown -R www-data:www-data /var/www/html