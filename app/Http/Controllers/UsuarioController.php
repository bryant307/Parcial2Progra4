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
}