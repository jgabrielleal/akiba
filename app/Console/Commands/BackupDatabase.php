<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class BackupDatabase extends Command
{

    protected $signature = 'db:backup';
    protected $description = 'Backup the database';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        /**
         * PT-BR: Use o arquivo .env para obter as credenciais do banco de dados
         * EN: Use the .env file to get the database credentials
         */
        $database = env('DB_DATABASE');
        $username = env('DB_USERNAME');
        $password = env('DB_PASSWORD');
        $host = env('DB_HOST');

        /**
         * PT-BR: Verifica se a pasta backups existe, se não, cria
         * EN: Verify if the path backups exists, if not, create it
         */
        $path = storage_path('backup');
        if (!File::exists($path)) {
            File::makeDirectory($path, 0755, true);
        }

        /**
         * PT-BR: Verifica se existe algum backup na pasta, se existir, deleta o mais antigo
         * EN: Verify if there is any backup in the path, if there is, delete the oldest one
         */
        $files = File::files($path);
        if (count($files) > 0) {
            $lastFile = collect($files)->sortByDesc(function ($file) {
                return $file->getMTime();
            })->first();
            File::delete($lastFile);
        }

        /**
         * PT-BR: Define a pasta para salvar o backup e o comando a ser executado
         * EN: Set the path to save the backup and the command to execute
         */
        $path = storage_path('backup/db_backup.sql');
        $command = "mysqldump --user={$username} --password={$password} --host={$host} {$database} > {$path}";

        /**
         * PT-BR: Executa o comando MYSQL dump para criar o backup
         * EN: Execute the MYSQL dump command to create the backup
         */
        $return = null;
        $output = null;
        exec($command, $output, $return);

        /**
         * PT-BR: Verifica se o backup foi realizado com sucesso
         * EN: Verify if the backup was successfully created
         */
        if ($return !== 0) {
            $this->error('Backup failed');
        } else {
            $this->info('Backup created success ' . $path);
        }
    }
}
