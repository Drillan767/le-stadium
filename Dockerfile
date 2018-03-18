FROM php:7.0-apache
COPY . /var/www/html/laravel
RUN apt-get update && apt-get install curl libmcrypt-dev zlib1g-dev libicu-dev g++ -y \
    && rm -r /var/lib/apt/lists/* \
    && docker-php-ext-configure pdo_mysql --with-pdo-mysql=mysqlnd \
    && docker-php-ext-install \
      intl \
      mbstring \
      mcrypt \
      pcntl \
      pdo_mysql \
      zip \
      opcache

RUN curl -sL https://deb.nodesource.com/setup_9.x | bash -
RUN apt-get update && apt-get install -y nodejs

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer
#COPY stadium.conf /etc/apache2/sites-available/laravel.conf
#RUN a2dissite 000-default.conf && a2ensite laravel.conf && a2enmod rewrite

RUN cd laravel && composer install && npm install && npm run production

RUN usermod -u 1000 www-data && groupmod -g 1000 www-data

WORKDIR /var/www/html/laravel