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
        Schema::create('patologias', function (Blueprint $table) {
            $table->increments('id_patologia');
            $table->string('nombre_patologia');
            $table->string('detalle_patologia');
            $table->Integer('id_tip_patologia')->unsigned();
            $table->foreign('id_tip_patologia')->references('id_tip_patologia')->on('tipo_patologia');
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
        Schema::dropIfExists('patologias');
    }
};
