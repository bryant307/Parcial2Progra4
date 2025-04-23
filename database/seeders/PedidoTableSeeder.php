<?php

namespace Database\Seeders;

use App\Models\Pedido;
use Illuminate\Database\Seeder;

class PedidosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pedido::create([
            'id_usuario' => 2,
            'total' => 1226.49,
            'estado' => 'en_proceso',
        ]);

        Pedido::create([
            'id_usuario' => 3,
            'total' => 79.99,
            'estado' => 'pendiente',
        ]);

        Pedido::create([
            'id_usuario' => 2,
            'total' => 51.98,
            'estado' => 'entregado',
        ]);
    }
}