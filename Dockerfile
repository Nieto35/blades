FROM php:8.0-fpm

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install RoadRunner
COPY --from=spiralscout/roadrunner:2.4.2 /usr/bin/rr /usr/bin/rr

WORKDIR /app

# Copy application files
COPY . .

# Remove vendor directory and composer.lock
RUN rm -rf /app/vendor
RUN rm -rf /app/composer.lock

# Install dependencies
RUN composer install --ignore-platform-reqs

# Install Laravel Octane and Spiral RoadRunner
RUN composer require laravel/octane spiral/roadrunner

# Copy .env.example to .env
COPY .env.example .env

# Clear caches
RUN php artisan cache:clear
RUN php artisan view:clear
RUN php artisan config:clear

# Install Octane with Swoole server
RUN php artisan octane:install --server="swoole"

# Start Octane with Swoole server
CMD php artisan octane:start --server="swoole" --host="0.0.0.0"

EXPOSE 8000