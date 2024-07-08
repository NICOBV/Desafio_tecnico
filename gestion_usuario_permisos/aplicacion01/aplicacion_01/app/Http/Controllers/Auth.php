<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\App01;
use Illuminate\Http\Request;

class App01LoginController extends Controller
{
    /**Intenta autenticar al usuario.*/
    public function login(Request $request)
    {
        $request->validate([
            'rut' => 'required|string',
            'contrasena' => 'required|string',
        ]);

        $credentials = $request->only('rut', 'contrasena');

        if (App01::validarCredenciales($credentials['rut'], $credentials['contrasena'])) {
            // Autenticación exitosa
            return response()->json(['message' => 'Autenticación exitosa']);
        }

        // Autenticación fallida
        return response()->json(['message' => 'Credenciales inválidas'], 401);
    }
}
