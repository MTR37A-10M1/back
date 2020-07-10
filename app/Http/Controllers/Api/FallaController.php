<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Falla;

class FallaController extends Controller
{
    //
    public function add(Request $request){
        try
        {
            $falla = new Falla();
            $falla->descripcion = $request->descripcion;
            $falla->idEquipo = $request->idEquipo;
            $falla->idEstado = $request->idEstado;
            $falla->save();
            
            return response()->json(['status' => true, 
                'message'=> 'Falla Registrado',
                'body'=> $falla],
                200);
        }
        catch(\Exception $e)
        {
            return response()->json(['status' => false,
                'message'=> 'Hubo un error',
                'body' => $e->getMessage()],
                500);
        }
    }

}