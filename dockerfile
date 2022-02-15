FROM php:7.4-apache 
RUN docker-php-ext-install mysqli
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 774 /var/www/html
COPY *.php /var/www/html/
