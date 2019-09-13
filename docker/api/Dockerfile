FROM php:7.2-fpm-stretch

ENV PATH="./vendor/bin:${PATH}" \
    NGINX_SERVER_NAME="_" \
    PHP_OPCACHE_VALIDATE_TIMESTAMPS="0" \
    PHP_OPCACHE_MAX_ACCELERATED_FILES="6000" \
    PHP_OPCACHE_MEMORY_CONSUMPTION="128"

RUN apt-get update \
    && apt-get -y --no-install-recommends install \
        procps \
        supervisor \
        nginx \
        libzip-dev \
        zip \
        unzip \
        git \
        netcat \
        libfreetype6-dev \
	    libjpeg62-turbo-dev \
	    libpng-dev \
	    ffmpeg \
	    dnsutils \
    && docker-php-ext-configure zip --with-libzip \
    && docker-php-ext-install mbstring pdo pdo_mysql zip opcache pcntl \
    && pecl install apcu xdebug-2.6.0alpha1 \
    && docker-php-ext-enable apcu xdebug \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd

COPY php/php.ini /usr/local/etc/php/php.ini

COPY supervisor/supervisord.conf /etc/supervisor/supervisord.conf
COPY supervisor/conf.d/*.conf /etc/supervisor/conf.d-available/

COPY run-app.sh /usr/local/bin/run-app
COPY php/composer-installer.sh /usr/local/bin/composer-installer

RUN chmod +x /usr/local/bin/run-app \
    && chmod +x /usr/local/bin/composer-installer \
    && /usr/local/bin/composer-installer \
    && mv composer.phar /usr/local/bin/composer \
    && chmod +x /usr/local/bin/composer \
    && composer --version

RUN chown -R www-data:www-data /var/www

USER www-data

RUN composer global require hirak/prestissimo

USER root

EXPOSE 80
EXPOSE 443

ENTRYPOINT ["/usr/local/bin/run-app"]

CMD ["supervisord", "-c", "/etc/supervisor/supervisord.conf"]
