<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Roles;
use App\Models\Permisos;

class AsignacionPermisosSeeder extends Seeder
{
    public function run()
    {
        $adminRole = Roles::where('nombre', 'administrador')->first();
        $userRole = Roles::where('nombre', 'usuario')->first();

        $permisos = Permisos::all();

        foreach ($permisos as $permiso) {
            $adminRole->permisos()->attach($permiso);
        }

        $userRole->permisos()->attach(Permisos::where('nombre', 'ver_cliente')->first());
    }
}

