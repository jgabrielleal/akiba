# Rede Akiba - O Paraíso dos Otakus  
> Novo modelo no ano 2025 de site o portal e web-rádio da Rede Akiba, trazendo uma nova experiência para os fãs da cultura japonesa desde 2016.

<div align="center">
    <img src="https://i.imgur.com/4s5yKze.png" width="300rem">
</div>

## languages used / Linguagens usadas
- Javascript<br>
- PHP 8.0<br>

## Frameworks and librarys used / Frameworks e bibliotecas usadas
- Jquery 3.7.1<br>
- Bootstrap 5.3<br>
- Laravel 11x<br>
- Livewire 3.0

## Required dependencies / Dependências obrigatórias

Para rodar o projeto da Rede Akiba, é necessário ter o **Docker** instalado em sua máquina. O Docker será utilizado para criar os containers necessários para a aplicação, como o ambiente para o banco de dados MySQL.

- **Docker**: é fundamental para que o Laravel Sail funcione corretamente, pois ele depende de containers Docker para a execução da aplicação e gerenciamento do banco de dados.

Certifique-se de que o Docker esteja corretamente instalado e configurado antes de executar os comandos abaixo.

## How to use / Como usar
EN-US:<br>
1º Install the packages using a command "composer install"<br>
2º Install Laravel Sail using a command "php artisan sail:install"<br>
3º Select the mysql database on sail installation<br>
4º Use the command "./vendor/bin/sail up -d" to create containers in docker"<br>
5º Use the command "./vendor/bin/sail artisan key:generate" to create key to Laravel<br>
6º Using the command "./vendor/bin/sail artisan migrate" to create tables in database

PT-BR:<br>
1º Instale os pacotes usando o comando "composer install"<br>
2º Instale o Laravel Sail usando o comando "php artisan sail:install"<br>
3º Selecione o banco de dados MySQL durante a instalação do Sail<br>
4º Use o comando "./vendor/bin/sail up -d" para criar os containers no Docker<br>
5º Use o comando "./vendor/bin/sail artisan key:generate" para gerar a chave do Laravel<br>
6º Use o comando "./vendor/bin/sail artisan migrate" para criar as tabelas no banco de dados<br>
