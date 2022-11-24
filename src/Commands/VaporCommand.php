<?php

namespace Astrogoat\Vapor\Commands;

use Illuminate\Console\Command;

class VaporCommand extends Command
{
    public $signature = 'vapor';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
