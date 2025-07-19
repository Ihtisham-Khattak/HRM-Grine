FROM php:8.2-fpm-alpine AS build


WORKDIR /var/www
RUN apk add --no-cache \
    bash \
    git \
    curl \
    zip \
    unzip \
    libpng \
    libpng-dev \
    oniguruma-dev \
    libxml2-dev \
    zip \
    libzip-dev \
    icu-dev \
    openssl
RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd zip intl
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
COPY . .
RUN composer install --no-dev --optimize-autoloader --no-interaction

FROM php:8.2-fpm-alpine

WORKDIR /var/www
RUN apk add --no-cache \
    bash \
    libpng \
    libpng-dev \
    oniguruma-dev \
    libxml2-dev \
    zip \
    libzip-dev \
    icu-dev \
    openssl \
    curl \
    nginx \
    supervisor \
    tzdata
RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd zip intl
COPY --from=build /var/www /var/www
RUN chown -R www-data:www-data /var/www && \
    chmod -R 755 /var/www/storage
EXPOSE 9000
CMD ["php-fpm"]
