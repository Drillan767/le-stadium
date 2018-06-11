FROM php:7.2-apache
WORKDIR /var/www/html
ADD --chown=www-data:www-data  . /var/www/html
RUN apt-get update && apt-get install curl gnupg libpng-dev libmcrypt-dev zip unzip build-essential -y
RUN docker-php-ext-install mbstring pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer
COPY stadium.conf /etc/apache2/sites-available/laravel.conf
RUN a2dissite 000-default.conf && a2ensite laravel.conf && a2enmod rewrite
RUN composer install  --no-interaction --optimize-autoloader --no-dev --prefer-dist
RUN curl -sL https://deb.nodesource.com/setup_9.x | bash -
RUN apt-get update && apt-get install -y nodejs
RUN npm install && npm run development