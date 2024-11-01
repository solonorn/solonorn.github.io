# Use a PHP with Apache image
FROM php:8.0-apache

# Copy everything in the project root to the container's web root
COPY . /var/www/html

# Set the document root (optional, if needed)
RUN echo "DocumentRoot /var/www/html" >> /etc/apache2/sites-available/000-default.conf

# Restart Apache to apply any configuration changes
RUN service apache2 restart