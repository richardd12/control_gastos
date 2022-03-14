<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EgresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egresos', function (Blueprint $table) {
            $table->id('egre_id');
            $table->foreignid('usu_id')->references('usu_id')->on('users');
            $table->foreignid('car_id')->references('car_id')->on('cargo');  
            $table->string('egre_cantidad');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
                       Schema::dropIfExists('egresos');

    }
}
