<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('productos_index', compact('productos'));
    }

    public function create()
    {
        return view('productos_create'); // Cambiado a 'productos_create'
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'imagen' => 'nullable|image|max:2048', // Opcional, debe ser una imagen de máximo 2MB
        ]);

        $producto = new Producto($request->except('imagen'));

        if ($request->hasFile('imagen')) {
            $path = $request->file('imagen')->store('public/productos');
            $producto->imagen = str_replace('public/', '', $path);
        }

        $producto->save();

        return redirect()->route('productos.index')->with('success', 'Producto creado exitosamente.');
    }

}