# Usar PHP 8.2 con Apache
FROM php:8.2-apache

# Instalar extensiones adicionales si es necesario
RUN docker-php-ext-install pdo pdo_mysql

# Copiar archivos de la aplicación al contenedor
COPY ./src /var/www/html

# Ajustar permisos para Apache
RUN chown -R www-data:www-data /var/www/html

# Exponer el puerto 80
EXPOSE 80
