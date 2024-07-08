<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Roles;

class RolesSeeder extends Seeder
{
    public function run()
    {
        Roles::create([
            'nombre' => 'administrador',
        ]);

        Roles::create([
            'nombre' => 'usuario',
        ]);

        // Agregar más roles según sea necesario
    }
}

