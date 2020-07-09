<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Usuario;

class UsuarioController extends Controller
{
    //
    public function add(Request $request){
        try
        {
            $user = new Usuario();
            $user->nombres = $request->nombres;
            $user->apellidos = $request->apellidos;
            $user->dni = $request->dni;
            $user->codigo = $request->codigo;
            $user->correo = $request->correo;
            $user->password = $request->password;
            $user->idCargo = $request->idCargo;
            $user->save();
            
            return response()->json(['status' => true, 
                'message'=> 'Usuario Creado',
                'body'=> $user],
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

    public function login(Request $request){
        try
        {
            $user = Usuario::where('name',$request->name)->where('password',$request->password)->first();
            if($user)
            {
                return response()->json(['status' => true, 
                    'message'=> 'Login Success',
                    'body'=> $user],
                    200);
            }
            else {
                return response()->json(['status' => false, 
                    'message'=> 'Login Fail',
                    'body'=> $user],
                    200);
            }
            
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