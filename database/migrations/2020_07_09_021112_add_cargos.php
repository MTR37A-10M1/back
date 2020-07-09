<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Http\Models\Cargo;

class AddCargos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        $cargo = new Cargo();
        $cargo->nombre = "Cargo1";
        $cargo->save();

        $cargo = new Cargo();
        $cargo->nombre = "Cargo2";
        $cargo->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
