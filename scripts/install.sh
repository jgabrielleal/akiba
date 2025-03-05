#!/bin/bash 

# Install the composer dependencies
composer install

# Install the laravel sail 
php artisan sail:install

# Create the .env file
cp .env.example .env

# Executing the sail up command
./vendor/bin/sail up -d

# Create the key for the application
./vendor/bin/sail artisan key:generate

# Echo the message to the console
echo "Rede Akiba Laravel Application"
echo "Credits to João Gabriel ( Suzuh ) and Elyson Santos ( Neko Kirame )"
echo ""
echo ""
echo "Aplication builded in docker and accesible in http://localhost"
echo ""
echo ""
echo "PHPMYADMIN ACCESS"
echo "Access the phpmyadmin in http://localhost:8080"
echo "User: sail"
echo "Password: password"
echo ""
echo ""
echo "COMMANDS LARAVEL ARTISAN"
echo "Executing the artisan commands with the prefix './vendor/bin/sail artisan'"
echo ""
echo ""
echo "UP AND DOWN THE APPLICATION"
echo "To start the application without logs, run the command './vendor/bin/sail up -d'"
echo "To start the application with logs, run the command './vendor/bin/sail up'"
echo "To stop the application execute the command './vendor/bin/sail down'"
echo ""
echo ""
echo "COMMANDS FROM WATCHING CSS TO SCSS"
echo "To convert the css files to scss, access the scripts folder and run the command 'bash sass.sh'"
