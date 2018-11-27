<?php

use Illuminate\Database\Seeder;

class NegotiationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Negotiation::create(['name'=>'Seleccionar Opción']);
        \App\Negotiation::create(['name'=>'Venta']);
        \App\Negotiation::create(['name'=>'Alquiler']);
        \App\Negotiation::create(['name'=>'Compartir']);
        \App\Negotiation::create(['name'=>'Vacacionar']);
        \App\Negotiation::create(['name'=>'Alquiler opción a compra']);
        \App\Negotiation::create(['name'=>'Traspaso']);

    }
}
