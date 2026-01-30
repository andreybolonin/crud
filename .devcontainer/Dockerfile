# Use a base image with PHP and Apache
FROM mcr.microsoft.com/devcontainers/php:0-8.2

# Install necessary extensions
RUN apt-get update && apt-get install -y libpq-dev
RUN docker-php-ext-install pdo pdo_pgsql
