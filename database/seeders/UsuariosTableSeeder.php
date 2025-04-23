<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Usuario::create([
            'nombre' => 'Administrador del Sistema',
            'email' => 'admin@example.com',
            'contraseña' => Hash::make('password'),
            'rol' => 'admin',
        ]);

        Usuario::create([
            'nombre' => 'Cliente Uno',
            'email' => 'cliente1@example.com',
            'contraseña' => Hash::make('secreto'),
            'rol' => 'cliente',
        ]);

        Usuario::create([
            'nombre' => 'Cliente Dos',
            'email' => 'cliente2@example.com',
            'contraseña' => Hash::make('clave123'),
            'rol' => 'cliente',
        ]);
    }
}