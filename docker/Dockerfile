FROM php:7.2-apache

RUN apt-get update

# 1. development packages
RUN apt-get install -y \
	git \
	zip \
	curl \
	iputils-ping \
	sudo \
	unzip \
	libicu-dev \
	libbz2-dev \
        libxml2-dev \
	libpng-dev \
	libjpeg-dev \
	libmcrypt-dev \
	libreadline-dev \
	libfreetype6-dev \
	g++

#2. install dependecies php	
RUN docker-php-ext-install \
	bz2 \
	intl \
	iconv \
	bcmath \
	opcache \
	calendar \
	mbstring \
	pdo_mysql \
	mysqli \
	soap \
    session \
	zip

#3. enable module
RUN a2enmod rewrite

#4. restart php
CMD apachectl -D FOREGROUND
