<?php

use Illuminate\Database\Seeder;

class ViewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\View::create(['user_id'=>'1','views'=>'10','property_id'=>'1']);
        \App\View::create(['user_id'=>'1','views'=>'4','property_id'=>'2']);
        \App\View::create(['user_id'=>'3','views'=>'125','property_id'=>'3']);
        \App\View::create(['user_id'=>'2','views'=>'1','property_id'=>'4']);
    }
}
