<?php

use Illuminate\Database\Seeder;
//use db;

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
            'name' => 'Admin',
            'email' => '@transisi.co.id',
            'password' => 'transisi',
        ]);
    
    }
}
