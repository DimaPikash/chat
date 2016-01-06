<?php

use Illuminate\Database\Seeder;

App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(array('name'=>'admin', 'email' => 'admin@site.local', 'password'=>'admin123', 'admin'=>true));
    }
}
