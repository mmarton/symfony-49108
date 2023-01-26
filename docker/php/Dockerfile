FROM php:8.2-apache

RUN apt-get update \
    && docker-php-ext-install \
        pdo_mysql \
    && a2dissite 000-default.conf \
    && a2enmod rewrite \
