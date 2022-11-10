<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->Increments('id_persona');
            $table->string('nombre_per');
            $table->string('apellido_pa_per');
            $table->string('apellido_ma_per');
            $table->integer('ci_per');
            $table->integer('cel_per');
            $table->string('num_seguro');
            $table->boolean('donante');
            $table->date('fecha_nac');
            $table->Integer('id_tipo_sangre')->unsigned();
            $table->foreign('id_tipo_sangre')->references('id_tipo_sangre')->on('tipo_sangre');
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
        Schema::dropIfExists('personas');
    }
};
