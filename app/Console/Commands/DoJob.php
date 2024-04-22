<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DoJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'custom:do-job {param1} {param2}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is the description of my command';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $parameter1 = $this->argument('param1');
        $parameter2 = $this->argument('param2');
        logger("Hello I am log from command and the value is:". $parameter1 ."   " . $parameter2);
    }
}
