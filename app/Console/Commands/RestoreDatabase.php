<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class RestoreDatabase extends Command
{
    protected $signature = 'db:restore {backupFile?}';
    protected $description = 'Restore MySQL database from a backup file';

    public function handle()
    {
        $backupFile = $this->argument('backupFile') ?: storage_path('backups/backup.sql'); // arquivo padrão
        if (!File::exists($backupFile)) {
            $this->error("Backup file not found: {$backupFile}");
            return;
        }

        $dbHost = config('database.connections.mysql.host');
        $dbPort = config('database.connections.mysql.port');
        $dbUser = config('database.connections.mysql.username');
        $dbPass = config('database.connections.mysql.password');
        $dbName = config('database.connections.mysql.database');

        $command = sprintf(
            'mysql -h%s -P%s -u%s %s %s < %s',
            $dbHost,
            $dbPort,
            $dbUser,
            $dbPass ? '-p' . escapeshellarg($dbPass) : '',
            $dbName,
            escapeshellarg($backupFile)
        );

        $result = null;
        $output = null;
        exec($command, $output, $result);

        if ($result === 0) {
            $this->info("Database successfully restored from: {$backupFile}");
        } else {
            $this->error("Error restoring database.");
        }
    }
}
