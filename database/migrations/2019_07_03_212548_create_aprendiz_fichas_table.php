<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAprendizFichasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aprendiz_fichas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->UnsignedBigInteger('IdAprendiz');
            $table->foreign('IdAprendiz')->references('Id')->table('Persona');
            $table->UnsignedBigInteger('IdFicha');
            $table->foreign('IdFicha')->references('Id')->table('Ficha');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aprendiz_fichas');
    }
}
