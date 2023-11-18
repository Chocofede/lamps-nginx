FROM php:8.2-apache

# Instala extensiones necesarias
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Copia la configuración del VirtualHost de Apache
COPY ./apache-config.conf /etc/apache2/sites-available/000-default.conf

# Habilita el sitio
RUN a2ensite 000-default.conf

# Reinicia Apache
RUN service apache2 restart