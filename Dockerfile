# Use official PHP 8.2 + Apache image
FROM php:8.2-apache

# Set working directory in container
WORKDIR /var/www/html/

# Copy all project files to container
COPY . .

# Enable Apache mod_rewrite if needed
RUN a2enmod rewrite

# Expose the default port
EXPOSE 10000