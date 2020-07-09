<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id')->unsigned();;
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('dni');
            $table->string('codigo');
            $table->string('correo');
            $table->string('password');
            $table->integer('idCargo')->unsigned()->nullable();

            $table->foreign('idCargo')->references('id')->on('cargo')->onDelete('cascade');
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
        Schema::dropIfExists('usuario');
    }
}
