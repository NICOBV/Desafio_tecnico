<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permisos;

class PermisosSeeder extends Seeder
{
    public function run()
    {
        Permisos::create([
            'nombre' => 'crear_usuario',
            'descripcion' => 'Permite crear nuevos usuarios',
        ]);

        Permisos::create([
            'nombre' => 'ver_usuario',
            'descripcion' => 'Permite ver detalles de los usuarios',
        ]);

        Permisos::create([
            'nombre' => 'editar_usuario',
            'descripcion' => 'Permite editar usuarios existentes',
        ]);

        Permisos::create([
            'nombre' => 'eliminar_usuario',
            'descripcion' => 'Permite eliminar usuarios',
        ]);

        // Agregar más permisos según sea necesario
    }
}
