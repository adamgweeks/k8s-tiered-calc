FROM php:8.0.3-apache-buster
RUN mkdir -p /var/www/html/frontend
COPY . /var/www/html/
COPY . /var/www/html/frontend

EXPOSE 80/tcp

