<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Producto::create([
            'nombre' => 'Laptop Gamer',
            'descripcion' => 'Potente laptop para videojuegos.',
            'precio' => 1200.50,
            'stock' => 15,
            'imagen' => 'laptop.jpg',
        ]);

        Producto::create([
            'nombre' => 'Mouse Inalámbrico',
            'descripcion' => 'Mouse ergonómico de alta precisión.',
            'precio' => 25.99,
            'stock' => 50,
            'imagen' => 'mouse.jpg',
        ]);

        Producto::create([
            'nombre' => 'Teclado Mecánico',
            'descripcion' => 'Teclado con interruptores mecánicos para una mejor experiencia de escritura.',
            'precio' => 79.99,
            'stock' => 30,
            'imagen' => 'teclado.jpg',
        ]);
    }
}