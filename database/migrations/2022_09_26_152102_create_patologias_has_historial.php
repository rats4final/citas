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
        Schema::create('patologias_has_historial', function (Blueprint $table) {
            $table->Integer('id_patologia')->unsigned();
            $table->foreign('id_patologia')->references('id_patologia')->on('patologias');
            $table->Integer('id_historial')->unsigned();
            $table->foreign('id_historial')->references('id_historial')->on('historial');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patologias_has_historial');
    }
};
