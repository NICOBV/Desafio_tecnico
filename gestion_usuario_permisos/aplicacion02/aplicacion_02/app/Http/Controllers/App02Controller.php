<?php

namespace App\Http\Controllers;

use App\Models\App02;
use Illuminate\Http\Request;

class App02Controller extends Controller
{
    public function index()
    {
        $clientes = App02::all();
        return response()->json($clientes);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_razon_social' => 'required',
            'rut' => 'required|unique:clientes',
            'telefono' => 'required',
            'email' => 'required|unique:clientes',
            'direccion_matriz' => 'required',
        ]);

        $cliente = App02::create($request->all());

        return response()->json($cliente, 201);
    }

    public function show($id)
    {
        $cliente = App02::find($id);

        if (!$cliente) {
            return response()->json(['message' => 'Cliente no encontrado'], 404);
        }

        return response()->json($cliente);
    }

    public function update(Request $request, $id)
    {
        $cliente = App02::find($id);

        if (!$cliente) {
            return response()->json(['message' => 'Cliente no encontrado'], 404);
        }

        $cliente->update($request->all());

        return response()->json($cliente);
    }

    public function destroy($id)
    {
        $cliente = App02::find($id);

        if (!$cliente) {
            return response()->json(['message' => 'Cliente no encontrado'], 404);
        }

        $cliente->delete();

        return response()->json(['message' => 'Cliente eliminado correctamente']);
    }
}
