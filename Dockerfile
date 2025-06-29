FROM php:8.2-apache

# Copia todos os arquivos do projeto para o diretório padrão do Apache
COPY . /var/www/html/

# Dá as permissões corretas ao Apache
RUN chown -R www-data:www-data /var/www/html \
 && chmod -R 755 /var/www/html

# Ativa o módulo de reescrita (caso você use .htaccess ou URLs amigáveis)
RUN a2enmod rewrite

FROM php:8.2-apache

# Instala a extensão mysqli e ativa o módulo rewrite do Apache
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli \
    && a2enmod rewrite

# Copia os arquivos da aplicação para o diretório do Apache
COPY . /var/www/html/

# Define permissões apropriadas
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

