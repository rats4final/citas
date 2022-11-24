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
        Schema::create('tipos_sangre', function (Blueprint $table) {
            $table->increments('id_tipo_sangre');
            $table->string('nombre_tipo_sangre')->unique();
            $table->string('descripcion_tipo_sangre')->nullable();
            $table->string('rareza_tipo_sangre');
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
        Schema::dropIfExists('tipo_sangre');
    }
};
