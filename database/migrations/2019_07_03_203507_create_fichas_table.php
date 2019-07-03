<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichas', function (Blueprint $table) {
            $table->string('id');
            $table->string('Nombre');
            $table->string('Responsable');
             $table->UnsignedBigInteger('IdPrograma');
            $table->foreign('IdPrograma')->references('Id')->table('programa');
            $table->UnsignedBigInteger('IdNivelFormacion');
            $table->foreign('IdNivelFormacion')->references('Id')->table('NivelFormacion');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fichas');
    }
}
