<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ProdutosFake extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'senai:produtos-fake';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cadastro de produtos fake';

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
