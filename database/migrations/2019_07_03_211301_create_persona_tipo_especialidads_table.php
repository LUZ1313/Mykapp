<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaTipoEspecialidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona_tipo_especialidads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->UnsignedBigInteger('IdPersona');
            $table->foreign('IdPersona')->references('Id')->table('Persona');
            $table->UnsignedBigInteger('IdTipoEspecialidad');
            $table->foreign('IdTipoEspecialidad')->references('Id')->table('TipoEspecialidad');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persona_tipo_especialidads');
    }
}
