FROM php:7.2-apache

RUN docker-php-ext-install pdo pdo_mysql

COPY vhost.conf /etc/apache2/sites-available/000-default.conf

RUN a2enmod rewrite