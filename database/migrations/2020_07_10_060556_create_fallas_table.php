<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFallasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fallas', function (Blueprint $table) {
            $table->increments('id')->unsigned();;
            $table->string('descripcion');
            $table->integer('idEquipo')->unsigned()->nullable();
            $table->integer('idEstado')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('idEquipo')->references('id')->on('equipo')->onDelete('cascade');
            $table->foreign('idEstado')->references('id')->on('estado')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fallas');
    }
}
