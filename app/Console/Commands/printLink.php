<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class printLink extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:print-link';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        var_dump($this->laravel['config']['filesystems.links'] ?? [public_path('storage') => storage_path('app/public')]);
    }
}
