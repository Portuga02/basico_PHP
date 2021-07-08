FROM php:8.0.8-apache
RUN docker-php-ext-install pdo pdo_mysql
COPY . /var/www/html

EXPOSE 80

RUN a2enmod rewrite
RUN chown=www:www . /var/www/html

WORKDIR /var/www/html