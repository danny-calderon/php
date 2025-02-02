# Usa una imagen oficial de PHP con Apache
FROM php:8.2-apache

# Instalar extensiones necesarias si es necesario
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copia todos los archivos al directorio correcto dentro del contenedor
COPY ./src /var/www/html/

# Expón el puerto 80 para poder acceder a la aplicación
EXPOSE 80

# Configura Apache para habilitar mod_rewrite si lo necesitas (para URLs amigables)
RUN a2enmod rewrite
