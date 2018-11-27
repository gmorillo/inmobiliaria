<?php

use Illuminate\Database\Seeder;

class DivisionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Division::create(['name'=>'Seleccionar Opción']);
        \App\Division::create(['name'=>'Cocina']);
        \App\Division::create(['name'=>'Habitación 1']);
        \App\Division::create(['name'=>'Habitación 2']);
        \App\Division::create(['name'=>'Habitación 3']);
        \App\Division::create(['name'=>'Salon']);
        \App\Division::create(['name'=>'Comedor']);
        \App\Division::create(['name'=>'Terraza']);
    }
}
