<?php

use Illuminate\Database\Seeder;

class EquipmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Equipments::create(['name'=>'Seleccionar Opción','property_id'=>'1']);
        \App\Equipments::create(['name'=>'Indiferente','property_id'=>'2']);
        \App\Equipments::create(['name'=>'Amueblado','property_id'=>'3']);
	    \App\Equipments::create(['name'=>'Sin Amueblar','property_id'=>'4']);
	    \App\Equipments::create(['name'=>'Sólo cocina equipada','property_id'=>'5']);
    }
}
