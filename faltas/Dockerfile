# Usa una imagen base de PHP con Apache
FROM php:8.2-apache

# Copia todos los archivos del proyecto al servidor web en el contenedor
COPY . /var/www/html/

RUN apt-get update && apt-get install -y \
    libzip-dev \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip

# Establece permisos para los archivos
RUN chown -R www-data:www-data /var/www/html/

# Expone el puerto 80 para acceder al servidor web
EXPOSE 80
