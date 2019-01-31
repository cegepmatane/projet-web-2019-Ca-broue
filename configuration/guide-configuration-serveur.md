# Configuration serveur Ubuntu 18.04

## Création d'un utilisateur
```bash
# adduser webmeister
```
Répondre aux questions dans le terminal

Donner les droits sudo à l'utilisateur
```bash
# usermod -aG sudo webmeister
```

## LAMP
Installation Apache2
```bash
# apt install apache2
```

Installation MariaDB
```bash
# apt install mariadb-server mariadb-client
```

Securisation MariaDB
```bash
# mysql_secure_installation
```
Répondent y ou yes aux quatres questions

## Installation PHP
```bash
# apt install php php-common php-mysql php-gd php-cli
```

## Configuration UFW
```bash
# ufw default deny incoming
# ufw default allow outgoing
# ufw allow ssh
# ufw allow 80/tcp
# ufw allow 443/tcp
# ufw enable
```