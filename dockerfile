
FROM php:7.4-apache

RUN apt-get update
RUN docker-php-ext-install mysqli

COPY index.php /var/www/html

RUN chown www-data:www-data /var/www -R
RUN chmod 774 /var/www -R

EXPOSE 80
