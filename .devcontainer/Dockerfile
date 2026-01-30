# Use a base image with PHP and Apache
FROM php:8.1-apache

# Install necessary extensions
RUN apt-get update && apt-get install -y libpq-dev
RUN docker-php-ext-install pdo pdo_pgsql
