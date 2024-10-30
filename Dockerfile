# Utiliser l'image de base PHP avec Apache
FROM php:7.4-apache

# Copier le code de l'application dans le répertoire racine d'Apache
COPY . /var/www/html/

# Exposer le port 80 pour accéder à l'application
EXPOSE 80