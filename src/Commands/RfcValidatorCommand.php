<?php

namespace RafaHernandez\RfcValidator\Commands;

use Illuminate\Console\Command;

class RfcValidatorCommand extends Command
{
    public $signature = 'rfc-validator';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
