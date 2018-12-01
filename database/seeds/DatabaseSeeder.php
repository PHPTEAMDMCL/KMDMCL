<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
   
    DB::table('users')->insert([
            'name'     => 'Chris Sevilleja',
            'username' => 'admin',
	        'email'    => 'chris@scotch.io',
	        'password' => Hash::make('admin@kmdmcl'),
        ]);
    }
}
