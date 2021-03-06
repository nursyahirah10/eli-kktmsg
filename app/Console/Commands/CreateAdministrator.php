<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;

class CreateAdministrator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'eli:admin {email} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $email = $this->argument('email');
        $password = $this->argument('password');

        $user = User::create([
            'email' => $email,
            'password' => bcrypt($password),
        ]);

        $user->address()->create([]);

        $user->assignRole('administrator');

        $this->info('Admin '. $email .' successfully created.');
    }
}
