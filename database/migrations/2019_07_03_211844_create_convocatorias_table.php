<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConvocatoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convocatorias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nombre');
            $table->date('FechaInicio');
            $table->date('FechaFin');
            $table->UnsignedBigInteger('IdPromagraBienestar');
            $table->foreign('IdPromagraBienestar')->references('Id')->table('PromagraBienestar');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('convocatorias');
    }
}
