<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::all();
        return view('pedidos_index', compact('pedidos')); // Cambiado a 'pedidos_index'
    }

    public function create()
    {
        return view('pedidos_create'); // Cambiado a 'pedidos_create'
    }

    // ... método store ...
    public function store(Request $request)
    {
        $request->validate([
            'id_usuario' => 'required|exists:usuarios,id',
            'total' => 'required|numeric|min:0',
            'estado' => 'required|in:pendiente,en_proceso,entregado,cancelado',
        ]);

        Pedido::create($request->all());

        return redirect()->route('pedidos.index')->with('success', 'Pedido creado exitosamente.');
    }
}