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
        Schema::create('historial', function (Blueprint $table) {
            $table->Increments('id_historial');
            $table->dateTime('fecha_historial');
            $table->string('detalles_historial');

            $table->Integer('id_persona')->unsigned();
            $table->foreign('id_persona')->references('id_persona')->on('persona');
            
            $table->Integer('id_sede')->unsigned();
            $table->foreign('id_sede')->references('id_sede')->on('sede');
            
            $table->Integer('id_medico')->unsigned();
            $table->foreign('id_medico')->references('id_users')->on('users');
            
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
        Schema::dropIfExists('historial');
    }
};
