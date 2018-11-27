<?php

use Illuminate\Database\Seeder;

class PropertytypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Propertytype::create(['name'=>'Seleccionar Opción']);
        \App\Propertytype::create(['name'=>'Obra Nueva']);
        \App\Propertytype::create(['name'=>'Vivienda']);
        \App\Propertytype::create(['name'=>'Oficinas']);
        \App\Propertytype::create(['name'=>'Locales']);
        \App\Propertytype::create(['name'=>'Naves']);
        \App\Propertytype::create(['name'=>'Garajes']);
        \App\Propertytype::create(['name'=>'Trasteros']);
        \App\Propertytype::create(['name'=>'Terrenos']);
        \App\Propertytype::create(['name'=>'Edificios']);        
    }
}
