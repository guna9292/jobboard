# deploy/Dockerfile

# Stage 1: Build stage
FROM php:8.3-fpm-alpine as build

# Install dependencies and PHP extensions
RUN apk add --no-cache \
    zip libzip-dev freetype libjpeg-turbo libpng freetype-dev libjpeg-turbo-dev libpng-dev \
    nodejs npm && docker-php-ext-configure zip \
    && docker-php-ext-install zip pdo pdo_mysql \
    && docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-enable gd

# Install Composer
COPY --from=composer:2.7.6 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy project files, set permissions
COPY . .
RUN chown -R www-data:www-data /var/www/html && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Install PHP and Node.js dependencies
RUN composer install --no-dev --prefer-dist && npm install && npm run build

# Stage 2: Production stage
FROM php:8.3-fpm-alpine

# Install Nginx and PHP extensions
RUN apk add --no-cache zip libzip-dev freetype libjpeg-turbo libpng freetype-dev libjpeg-turbo-dev \
    && docker-php-ext-configure zip && docker-php-ext-install zip pdo pdo_mysql && docker-php-ext-configure gd \
    && docker-php-ext-install -j$(nproc) gd && docker-php-ext-enable gd

# Copy files from build stage
COPY --from=build /var/www/html /var/www/html
COPY ./deploy/nginx.conf /etc/nginx/http.d/default.conf
COPY ./deploy/php.ini "$PHP_INI_DIR/conf.d/app.ini"

WORKDIR /var/www/html

VOLUME ["/var/www/html/storage/app"]

CMD ["sh", "-c", "nginx && php-fpm"]
