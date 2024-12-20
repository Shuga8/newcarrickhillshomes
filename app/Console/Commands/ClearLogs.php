<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ClearLogs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'log:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clears Log File';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        File::put(storage_path('logs/laravel.log'), '');
        $this->info('Logs have been cleared!');
        return 0;
    }
}
