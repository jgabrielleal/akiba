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
         * Use the .env file to get the database credentials
         */
        $database = env('DB_DATABASE');
        $username = env('DB_USERNAME');
        $password = env('DB_PASSWORD');
        $host = env('DB_HOST');

        /**
         * Verify if the path backups exists, if not, create it
         */
        $path = storage_path('backup');
        if (!File::exists($path)) {
            File::makeDirectory($path, 0755, true);
        }

        /**
         * Verify if there is any backup in the path, if there is, delete the oldest one
         */
        $files = File::files($path);
        if (count($files) > 0) {
            $lastFile = collect($files)->sortByDesc(function ($file) {
                return $file->getMTime();
            })->first();
            File::delete($lastFile);
        }

        /**
         * Set the path to save the backup and the command to execute
         */
        $path = storage_path('backup/db_backup.sql');
        $command = "mysqldump --user={$username} --password={$password} --host={$host} {$database} > {$path}";

        /**
         * Execute the MYSQL dump command to create the backup
         */
        $return = null;
        $output = null;
        exec($command, $output, $return);

        /**
         * Verify if the backup was successfully created
         */
        if ($return !== 0) {
            $this->error('Backup failed');
        } else {
            $this->info('Backup created success ' . $path);
        }
    }
}
