<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingresos', function (Blueprint $table) {
            $table->id('ing_id');
            $table->foreignid('car_id')->references('car_id')->on('cargo');
            $table->foreignid('usu_id')->references('usu_id')->on('users');
            $table->string('ing_cantidad');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
                               Schema::dropIfExists('ingresos');
    }
}
