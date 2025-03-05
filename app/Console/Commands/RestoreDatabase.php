<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class RestoreDatabase extends Command
{
    protected $signature = 'db:restore';
    protected $description = 'Restore the database from a backup';

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
         * Verify if the backup file exists
         */

        $dir = storage_path('backup');
        $file = $dir . '/db_backup.sql';
        if (!File::exists($file)) {
            $this->error('The backup file does not exist.');
            return;
        }

        /**
         * Set the command to execute
         */
        $command = "mysql --user={$username} --password={$password} --host={$host} {$database} < {$file}";

        /**
         * Execute the MYSQL command to restore the backup
         */
        $return = null;
        $output = null;
        exec($command, $output, $return);

        if ($return !== 0) {
            $this->error('The restoration failed.');
        } else {
            $this->info('The restoration was successful.');
        }
    }

}
