<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBienvenidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bienvenidas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo_bienvenida');
            $table->text('descripcion_bienvenida');
            $table->string('imagen_bienvenida');
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
        Schema::dropIfExists('bienvenidas');
    }
}
