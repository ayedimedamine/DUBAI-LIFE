FROM php:7.4-apache
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite
COPY . /var/www/
RUN chown -R www-data:www-data /var/www/

# RUN composer install
COPY start-apache /usr/local/bin
CMD ["start-apache"]
EXPOSE 80