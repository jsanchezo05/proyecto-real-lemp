FROM php:8.2-fpm

# Instalar extensión mysqli
RUN docker-php-ext-install mysqli

# Crear usuario sin privilegios
RUN groupadd -r appuser && useradd -r -g appuser appuser

# Cambiar propietario de los archivos
RUN chown -R appuser:appuser /var/www/html

# Cambiar al usuario sin privilegios
USER appuser
