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
                'message'=> 'Falla Registrada',
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

    public function update(Request $request){
        try
        {
            $falla = Falla::where('id',$request->id)->first();
            $falla->descripcion = $request->descripcion;
            $falla->idEquipo = $request->idEquipo;
            $falla->idEstado = $request->idEstado;
            $falla->save();
            
            return response()->json(['status' => true, 
                'message'=> 'Falla Actualizada',
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

    public function all(){
        try
        {
            $fallas = Falla::with(['equipo','estado'])->get();
            
            return response()->json(['status' => true, 
                'message'=> 'Fallas Encontradas',
                'body'=> $fallas],
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