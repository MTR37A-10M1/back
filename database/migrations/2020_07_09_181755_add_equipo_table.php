<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Http\Models\Equipo;

class AddEquipoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        $equipo = new Equipo();
        $equipo->nombre = "Mauina1";
        $equipo->url = "https://www.liebherr.com/shared/media/construction-machinery/earthmoving/stages/small-stage/liebherr-a922-rail-stage.jpg";
        $equipo->save();

        $equipo = new Equipo();
        $equipo->nombre = "Mauina2";
        $equipo->url = "https://www.liebherr.com/shared/media/construction-machinery/earthmoving/stages/small-stage/liebherr-new-telescopic-handlers-min.jpg";
        $equipo->save();

        $equipo = new Equipo();
        $equipo->nombre = "Mauina3";
        $equipo->url = "https://www.liebherr.com/shared/media/construction-machinery/earthmoving/stages/small-stage/liebherr-assistenzsysteme-wheel-loader.jpg";
        $equipo->save();
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
