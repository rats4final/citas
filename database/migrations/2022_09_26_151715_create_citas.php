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
        Schema::create('citas', function (Blueprint $table) {
            $table->increments('id_cita');
            $table->dateTime('fecha_cita');
            $table->string('detalles_cita');
            $table->Integer('id_secretaria')->unsigned();
            $table->foreign('id_secretaria')->references('id')->on('users');
            $table->Integer('id_paciente')->unsigned();
            $table->foreign('id_paciente')->references('id')->on('users');
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
        Schema::dropIfExists('citas');
    }
};
