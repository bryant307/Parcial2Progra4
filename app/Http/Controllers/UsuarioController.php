<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios_index', compact('usuarios')); // Cambiado a 'usuarios_index'
    }

    public function create()
    {
        return view('usuarios_create'); // Cambiado a 'usuarios_create'
    }

    // ... método store ...
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:usuarios',
            'contraseña' => 'required|string|min:8|confirmed',
            'rol' => 'required|in:admin,cliente',
        ]);

        Usuario::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'contraseña' => Hash::make($request->contraseña),
            'rol' => $request->rol,
        ]);

        return redirect()->route('usuarios.index')->with('success', 'Usuario creado exitosamente.');
    }
}