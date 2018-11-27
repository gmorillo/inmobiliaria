<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->boolean('status')->default(true);
            $table->float('price');
            $table->integer('negotiation_id');
            $table->integer('propertytype_id'); // tipo de inmueble
            $table->integer('housingtype_id'); //tipo de vivienda
            $table->integer('equipment_id');
            $table->float('habs');
            $table->float('bath');
            $table->string('address');
            $table->float('number');
            $table->float('cp');
            $table->integer('city_id');
            $table->float('area');
            $table->float('antiquity');
            $table->float('floor');
            $table->string('description',2000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
