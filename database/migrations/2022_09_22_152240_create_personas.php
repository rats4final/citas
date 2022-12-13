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
            $table->string('nombre_per')->nullable();
            $table->string('apellido_pa_per')->nullable();
            $table->string('apellido_ma_per')->nullable();
            $table->integer('ci_per')->nullable();
            $table->integer('cel_per')->nullable();
            $table->string('num_seguro')->nullable();
            $table->boolean('donante')->nullable();
            $table->date('fecha_nac')->nullable();
            $table->Integer('id_tipo_sangre')->unsigned()->nullable()->default(1);
            $table->foreign('id_tipo_sangre')->references('id_tipo_sangre')->on('tipos_sangre');
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
