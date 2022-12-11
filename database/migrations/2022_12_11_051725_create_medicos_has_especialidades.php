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
        Schema::create('medicos_has_especialidades', function (Blueprint $table) {
            $table->Integer('id_medico')->unsigned()->nullable();
            $table->foreign('id_medico')->references('id')->on('users');


            $table->Integer('id_especialidad')->unsigned()->nullable();
            $table->foreign('id_especialidad')->references('id_especialidad')->on('especialidades');
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
        Schema::dropIfExists('medicos_has_especialidades');
    }
};
