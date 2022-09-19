<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DB_TEST extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        \Artisan::call('db:wipe');
        \Artisan::call('migrate --seed');

        return 0;
    }
}
