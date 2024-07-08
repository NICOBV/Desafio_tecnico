<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('app01')->insert([
            [
                'nombre' => 'Juan',
                'apellido' => 'Perez',
                'rut' => '12345678-9',
                'correo' => 'juan.perez@example.com',
                'contrasena' => Hash::make('juanpassword'),
            ],
            [
                'nombre' => 'Maria',
                'apellido' => 'Gomez',
                'rut' => '98765432-1',
                'correo' => 'maria.gomez@example.com',
                'contrasena' => Hash::make('mariapassword'),
            ],
            [
                'nombre' => 'Carlos',
                'apellido' => 'Rodriguez',
                'rut' => '11223344-5',
                'correo' => 'carlos.rodriguez@example.com',
                'contrasena' => Hash::make('carlospassword'),
            ],
            [
                'nombre' => 'Alejandra',
                'apellido' => 'López',
                'rut' => '97765432-1',
                'correo' => 'alejandra.lopez@example.com',
                'contrasena' => Hash::make('alejandrapass'),
            ],
            [
                'nombre' => 'Gabriel',
                'apellido' => 'Fernández',
                'rut' => '87654321-0',
                'correo' => 'gabriel.fernandez@example.com',
                'contrasena' => Hash::make('gabrielpass'),
            ],
            [
                'nombre' => 'Laura',
                'apellido' => 'Martínez',
                'rut' => '2345689-0',
                'correo' => 'lauramartinez@example.com',
                'contrasena' => Hash::make('laurapassword'),
            ],
        ]);
    }
}
