FROM php:8.2-apache

# Copia todo tu proyecto al contenedor (servidor Apache)
COPY . /var/www/html/

# Habilita mod_rewrite por si usas URLs limpias con .htaccess
RUN a2enmod rewrite
