<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function doLogin(Request $request)
    {   
        $credentials = $request->only('email', 'password');

        if (\Auth::attempt($credentials)) {            
            return response()->json([
                "status" => true,
                "message" => "Bienvenido al sistema"
            ]);
        } else {
            return response()->json([
                "status" => false,
                "message" => "Usuario y/o contrasena incorrecta"
            ]);
        }
    }
}
