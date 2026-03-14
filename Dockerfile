# Use official PHP 8.2 + Apache image
FROM php:8.2-apache

# Set working directory in container
WORKDIR /var/www/html/

# Copy all project files to container
COPY . .

# Enable Apache mod_rewrite if needed
RUN a2enmod rewrite

# Install PHP extensions for MySQL & PostgreSQL
RUN docker-php-ext-install mysqli pdo pdo_pgsql

# Expose the default port
EXPOSE 10000