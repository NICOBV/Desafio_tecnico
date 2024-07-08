<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CheckPermission
{
    public function handle(Request $request, Closure $next, $permission)
    {
        $token = $request->bearerToken();

        if (!$token) {
            return response()->json(['message' => 'Token no proporcionado'], 401);
        }

        $response = Http::withToken($token)->get('http://localhost/gestion_usuario_permisos/aplicacion01/aplicacion01/public/api/verify-permission', [
            'permission' => $permission,
        ]);

        if ($response->status() !== 200) {
            return response()->json(['message' => 'Permiso denegado'], 403);
        }

        return $next($request);
    }
}
