<?php

namespace App\Http\Controllers;

use App\Models\App01;
use Illuminate\Http\Request;

class App01Controller extends Controller
{
    
    public function index()
    {
        $users = App01::all();
        return response()->json($users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(App01 $app01)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(App01 $app01)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, App01 $app01)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(App01 $app01)
    {
        //
    }
	
	 public function verifyPermission(Request $request)
    {
        $user = Auth::user();
        $permission = $request->input('permission');

        if ($user->permisos->contains('nombre', $permission)) {
            return response()->json(['message' => 'Permiso concedido'], 200);
        }

        return response()->json(['message' => 'Permiso denegado'], 403);
    }
}
