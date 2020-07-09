<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Equipo;

class EquipoController extends Controller
{
    //
    public function all(Request $request){
        try
        {
            $equipos = Equipo::all();
            
            return response()->json(['status' => true, 
                'message'=> 'Resultados encontrados',
                'body'=> $equipos],
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