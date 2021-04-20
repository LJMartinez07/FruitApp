<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\frutera\User::class, 29)->create();

        \frutera\User::create([
        	'name' => 'Luis',
        	'email'=> 'Luis@gmail.com',
        	'password' => bcrypt('123')
        ]);
    }
}
