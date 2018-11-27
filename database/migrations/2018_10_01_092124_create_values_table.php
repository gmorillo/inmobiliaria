<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     /*
     *
     *
     ************** Datos catastrales
     *
     *
     *
     *
     * @return void
     */
    public function up()
    {
        Schema::create('values', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reference');
            $table->integer('idufir');
            $table->string('floor');
            $table->string('area');
            $table->string('antiquity');
            $table->string('propertypercent');
            $table->string('floorprice');
            $table->string('edifprice');
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
        Schema::dropIfExists('values');
    }
}
