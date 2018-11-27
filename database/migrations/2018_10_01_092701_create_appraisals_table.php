<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppraisalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     *
     *
     *
     *********** Datos tasación *************
     *
     *
     *
     *
     * @return void
     */
    public function up()
    {
        // tasación
        Schema::create('appraisals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('property_id');
            $table->string('floorprice');
            $table->string('edifprice');
            $table->string('actualprice');
            $table->date('dateprice');
            $table->string('performance');
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
        Schema::dropIfExists('appraisals');
    }
}
