# Utiliser une image PHP avec Apache
FROM php:8.3-apache

# Mise à jour et installation des dépendances
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    sudo

# Installation des extensions PHP nécessaires
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Configuration d'Apache
RUN a2enmod rewrite

# Créer l'utilisateur vscode
RUN useradd -m -s /bin/bash -G sudo vscode \
    && echo 'vscode ALL=(ALL) NOPASSWD:ALL' >> /etc/sudoers.d/vscode \
    && chmod 0440 /etc/sudoers.d/vscode

# Définir le répertoire de travail
WORKDIR /workspace

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Définir l'utilisateur par défaut
USER vscode
