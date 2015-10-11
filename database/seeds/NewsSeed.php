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
            'title' => str_random(10),
            'segment' => str_random(100),
            'content' => str_random(1000),   
        ]);
    }
}
