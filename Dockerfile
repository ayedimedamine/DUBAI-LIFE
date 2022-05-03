FROM php:8.1.5-apache

RUN apt-get update
RUN apt-get -y install apt-transport-https lsb-release ca-certificates curl
RUN curl -sSLo /usr/share/keyrings/deb.sury.org-php.gpg https://packages.sury.org/php/apt.gpg
RUN sh -c 'echo "deb [signed-by=/usr/share/keyrings/deb.sury.org-php.gpg] https://packages.sury.org/php/ $(lsb_release -sc) main" > /etc/apt/sources.list.d/php.list'
RUN docker-php-ext-install pdo pdo_mysql
RUN apt-get update
# RUN apt-get install -y php-pdo-mysql

COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite
COPY . /var/www/
RUN chown -R www-data:www-data /var/www/
WORKDIR /var/www/
# RUN composer install
COPY start-apache /usr/local/bin
RUN php config/sql.php
CMD ["start-apache"]
EXPOSE 80