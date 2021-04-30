<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RemoveProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'remove:RemoveProduct';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Este comando desativa o produto';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return 0;
    }
}
