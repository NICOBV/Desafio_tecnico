<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\App01;
use App\Models\Roles;

class UsuarioRolesSeeder extends Seeder
{
    public function run()
    {
        $adminRole = Roles::where('nombre', 'administrador')->first();
        $userRole = Roles::where('nombre', 'usuario')->first();

        $adminUser = App01::where('rut', '11223344-5')->first(); // Juan Perez
        $regularUser = App01::where('rut', '12345678-9')->first(); // Otro usuario

        $adminUser->roles()->attach($adminRole);
        $regularUser->roles()->attach($userRole);
    }
}


