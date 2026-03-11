FROM public.ecr.aws/docker/library/php:8.1-apache

RUN docker-php-ext-install mysqli

COPY . /var/www/html/

EXPOSE 80