<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompradorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compradors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cedula');
            $table->string('nombre_completo', 100);
            $table->string('telefono', 11);
            $table->string('email', 50);
            $table->string('direccion', 45);
            $table->string('barrio', 50);
            $table->string('ciudad', 30);
            $table->string('departamento', 45);
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
        Schema::dropIfExists('compradors');
    }
}
