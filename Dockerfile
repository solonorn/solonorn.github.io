# Use PHP with Apache
FROM php:8.0-apache

# Set the working directory to /var/www/html
WORKDIR /var/www/html

# Copy all files from the project directory into the container's web root
COPY . /var/www/html

# Set permissions for all files in the web root
RUN chmod -R 755 /var/www/html

# Restart Apache to apply any new configurations
RUN service apache2 restart