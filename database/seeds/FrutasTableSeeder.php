<?php

use Illuminate\Database\Seeder;

class FrutasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\frutera\Fruta::class, 20)->create();
    }
}
