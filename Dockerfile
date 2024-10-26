# Usando a imagem base oficial do PHP com Apache
FROM php:8.1-apache

# Atualiza o sistema e instala as extensões necessárias
RUN apt-get update && apt-get install -y \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install mysqli pdo_mysql mbstring zip exif pcntl bcmath gd

# Habilita módulos Apache, se necessário
RUN a2enmod rewrite

# Copia o código da aplicação para o diretório raiz do Apache
COPY . /var/www/html/

# Define o diretório de trabalho
WORKDIR /var/www/html/

# Define as permissões necessárias
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Exponha a porta 80
EXPOSE 80

# Define variáveis de ambiente (opcional, melhor usar em tempo de execução)
# ENV TOKEN=seu_token
# ENV LANG=pt-br
# ENV DB_HOST=seu_host_db
# ENV DB_USER=seu_usuario_db
# ENV DB_PASSWORD=sua_senha_db
# ENV DB_NAME=seu_nome_db

# Inicia o servidor Apache em primeiro plano
CMD ["apache2-foreground"]