<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'rut' => 'required',
            'contrasena' => 'required',
        ]);

        $response = Http::post('http://localhost/gestion_usuario_permisos/aplicacion01/aplicacion01/public/api/login', [
            'rut' => $request->rut,
            'contrasena' => $request->contrasena,
        ]);

        if ($response->status() == 200) {
            return response()->json([
                'access_token' => $response->json()['access_token'],
                'token_type' => 'Bearer',
            ]);
        }

        return response()->json(['message' => 'Credenciales incorrectas'], 401);
    }
}
