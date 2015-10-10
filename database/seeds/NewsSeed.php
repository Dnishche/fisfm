<?php

use Illuminate\Database\Seeder;

class NewsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            'header' => str_random(10),
            'description' => str_random(100),   
        ]);
    }
}
