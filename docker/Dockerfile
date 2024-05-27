# Use the official PHP image as a parent image
FROM php:8.1-fpm

# Set the working directory to /var/www/html
WORKDIR /var/www/html

RUN curl -sS https://getcomposer.org/installer | \
    php -- --install-dir=/usr/local/bin --filename=composer

# Copy the current directory contents into the container at /var/www/html
COPY . .

RUN composer install

# Install any needed packages
RUN docker-php-ext-install pdo pdo_mysql

# # Expose port 9000
EXPOSE 9000