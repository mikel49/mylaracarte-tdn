<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Message;

class CleanDatabase extends Command
{
    /**
     *
     * $hidden=false la commande est visible dans php artisan  $hidden=true coomande n'est plus affichée
     */
    protected $hidden = false;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Laracarte:cleandb';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clean Database';

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
     * @return mixed
     */
    public function handle()
    {
        $this->info('Clean database...');
        Message::oneMonthOld()->delete();
        $this->info('Database cleaned successfully.');
    }
}
