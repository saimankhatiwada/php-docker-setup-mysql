FROM php:8.0-apache
RUN docker-php-ext-install mysqli
COPY src/ /var/www/html
EXPOSE 80

