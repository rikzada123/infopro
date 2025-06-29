FROM php:8.2-apache

# Copia todos os arquivos do projeto para o diretório padrão do Apache
COPY . /var/www/html/

# Dá as permissões corretas ao Apache
RUN chown -R www-data:www-data /var/www/html \
 && chmod -R 755 /var/www/html

# Ativa o módulo de reescrita (caso você use .htaccess ou URLs amigáveis)
RUN a2enmod rewrite
