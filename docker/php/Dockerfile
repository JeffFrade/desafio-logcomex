FROM composer:2 AS composer
FROM php:8.2-fpm

USER root
COPY --from=composer /usr/bin/composer /usr/bin/composer

ENV COMPOSER_MEMORY_LIMIT=-1

RUN apt-get update \
    && apt-get install -y \
        autoconf \
        git \
        zip \
        unzip \
        libzip-dev \
        zlib1g-dev \
        libssl-dev \
        libmemcached-dev \
        net-tools \
    && useradd -m jefffrade

RUN rm /etc/ssl/openssl.cnf

RUN docker-php-ext-install \
        pdo \
        pdo_mysql \
        zip

RUN pecl install \
        memcached

RUN docker-php-ext-enable \
        memcached

WORKDIR /desafio-logcomex

RUN chown -R jefffrade:jefffrade /desafio-logcomex
USER jefffrade
