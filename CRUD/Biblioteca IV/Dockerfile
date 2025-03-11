# Usa una imagen base de PHP con Apache
FROM php:8.1-apache

# Copia todos los archivos del proyecto al servidor web en el contenedor
COPY . /var/www/html/

# Establece permisos para los archivos
RUN chown -R www-data:www-data /var/www/html/ \
    && chmod -R 755 /var/www/html/

# Habilita el módulo de reescritura de Apache
RUN a2enmod rewrite

# Expone el puerto 80 para acceder al servidor web
EXPOSE 80