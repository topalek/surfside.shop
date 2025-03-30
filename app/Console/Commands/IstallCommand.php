<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class istallcommand extends Command
{
    protected $signature = 'shop:install';

    protected $description = 'Installation';

    public function handle(): int
    {
        $this->call('storage:link');
        $this->call('migrate');

        return self::SUCCESS;
    }
}
