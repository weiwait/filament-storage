<?php

namespace Weiwait\FilamentStorage\Commands;

use Illuminate\Console\Command;

class FilamentStorageCommand extends Command
{
    public $signature = 'filament-storage';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
