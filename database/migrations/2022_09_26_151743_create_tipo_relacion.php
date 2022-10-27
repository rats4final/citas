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
        Schema::create('tipo_relacion', function (Blueprint $table) {
            $table->increments('id_tip_rel');
            $table->string('relacion_tip_rel');
            $table->Integer('id_persona')->unsigned();
            $table->foreign('id_persona')->references('id_persona')->on('personas');
            $table->Integer('id_pariente')->unsigned();
            $table->foreign('id_pariente')->references('id_persona')->on('personas');
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
        Schema::dropIfExists('tipo_relacion');
    }
};
