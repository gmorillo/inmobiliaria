<?php

use Illuminate\Database\Seeder;

class HousingtypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Housingtype::create(['name'=>'Seleccionar Opción']);
        \App\Housingtype::create(['name'=>'Piso']);
	    \App\Housingtype::create(['name'=>'Tipo Estudio']);
	    \App\Housingtype::create(['name'=>'Habitación']);
	    \App\Housingtype::create(['name'=>'Apartamento']);
	    \App\Housingtype::create(['name'=>'Casas o Chalets']);
	    \App\Housingtype::create(['name'=>'Casas Rústicas']);
	    \App\Housingtype::create(['name'=>'Duplex']);
	    \App\Housingtype::create(['name'=>'Áticos']);  

    }
}
