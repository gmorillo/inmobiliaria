<?php

use Illuminate\Database\Seeder;

class DetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Detail::create(['name'=>'Con ascensor']);
        \App\Detail::create(['name'=>'Terraza']);
        \App\Detail::create(['name'=>'Acepta animales']);
        \App\Detail::create(['name'=>'Piscina']);
        \App\Detail::create(['name'=>'Plaza de garaje']);
        \App\Detail::create(['name'=>'Aire acondicionado']);
        \App\Detail::create(['name'=>'Balcón']);
        \App\Detail::create(['name'=>'Armarios empotrados']);
        \App\Detail::create(['name'=>'Trastero']);
    }
}
