<?php

namespace Mintreu\Layout\Commands;

use Illuminate\Console\Command;

class ManifestCommand extends Command
{
    public $signature = 'layout';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
