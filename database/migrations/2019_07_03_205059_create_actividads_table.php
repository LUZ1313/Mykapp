<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nombre');
            $table->date('Fecha');
            $table->string('Lugar');
             $table->string('Descripcion');
                $table->UnsignedBigInteger('Responsable');
            $table->foreign('Responsable')->references('Id')->table('Usuario');
               $table->UnsignedBigInteger('IdTipoActividad');
            $table->foreign('IdTipoActividad')->references('Id')->table('TipoActividad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividads');
    }
}
