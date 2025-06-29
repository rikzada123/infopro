# Usa a imagem oficial do PHP com Apache
FROM php:8.2-apache

# Habilita o mod_rewrite e outras extensões
RUN a2enmod rewrite \
    && docker-php-ext-install mysqli

# Instala dependências para PHPMailer via Composer (se necessário)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copia os arquivos do seu projeto para a pasta do Apache
COPY . /var/www/html/

# Define permissões corretas
RUN chown -R www-data:www-data /var/www/html

# Porta padrão do Apache
EXPOSE 80
