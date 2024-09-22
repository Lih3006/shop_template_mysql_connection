# Use the official PHP 8.3 image as a base
FROM php:8.3-cli

RUN apt -y update
RUN apt -y upgrade
RUN docker-php-ext-install pdo_mysql

# Set the working directory
WORKDIR /var/www/html

# Copy the local code to the container
COPY . /var/www/html

# Expose port 3000 (or any port you prefer)
EXPOSE 3000

# Command to run PHP built-in server (adjust the directory as needed)
CMD ["php", "-S", "0.0.0.0:3000", "-t", "/var/www/html/public"]