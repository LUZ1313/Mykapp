<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('Direccion');
            $table->UnsignedBigInteger('IdGenero');
            $table->foreign('IdGenero')->references('Id')->table('Genero');
            $table->UnsignedBigInteger('IdUsuario');
            $table->foreign('IdUsuario')->references('Id')->table('Usuario');
             $table->UnsignedBigInteger('IdTipoPoblacion');
            $table->foreign('IdTipoPoblacion')->references('Id')->table('Poblacion');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
