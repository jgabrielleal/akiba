<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class BackupDatabase extends Command
{
    protected $signature = 'db:backup';
    protected $description = 'Backup the MySQL database and save it in storage/backups.';

    public function handle()
    {
        $dbHost = config('database.connections.mysql.host');
        $dbPort = config('database.connections.mysql.port');
        $dbUser = config('database.connections.mysql.username');
        $dbPass = config('database.connections.mysql.password');
        $dbName = config('database.connections.mysql.database');

        $backupPath = storage_path('backups');

        if (!File::exists($backupPath)) {
            File::makeDirectory($backupPath, 0755, true);
        }

        $fileName = 'backup.sql';
        $fullPath = $backupPath . DIRECTORY_SEPARATOR . $fileName;

        $command = sprintf(
            'mysqldump -h%s -P%s -u%s %s %s > %s',
            $dbHost,
            $dbPort,
            $dbUser,
            $dbPass ? '-p' . escapeshellarg($dbPass) : '',
            $dbName,
            escapeshellarg($fullPath)
        );

        $result = null;
        $output = null;
        exec($command, $output, $result);

        if ($result === 0) {
            $this->info("Backup created: {$fullPath}");
        } else {
            $this->error("Failed to create backup.");
        }
    }
}
