<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Pedido</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
        }
        h1 {
            color: #333;
        }
        form {
            margin-top: 20px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 300px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        select,
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button[type="submit"] {
            background-color: #f44336;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #d32f2f;
        }
        .error {
            color: red;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <h1>Crear Nuevo Pedido</h1>

    <form action="{{ route('pedidos.store') }}" method="POST">
        @csrf
        <div>
            <label for="id_usuario">Usuario:</label>
            <select id="id_usuario" name="id_usuario" required>
                <option value="">-- Seleccionar Usuario --</option>
                @foreach (\App\Models\Usuario::all() as $usuario)
                    <option value="{{ $usuario->id }}" {{ old('id_usuario') == $usuario->id ? 'selected' : '' }}>
                        {{ $usuario->nombre }} (ID: {{ $usuario->id }})
                    </option>
                @endforeach
            </select>
            @error('id_usuario') <div class="error">{{ $message }}</div> @enderror
        </div>
        <div>
            <label for="total">Total:</label>
            <input type="number" step="0.01" id="total" name="total" value="{{ old('total') }}" required>
            @error('total') <div class="error">{{ $message }}</div> @enderror
        </div>
        <div>
            <label for="estado">Estado:</label>
            <select id="estado" name="estado">
                <option value="pendiente" {{ old('estado') == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                <option value="en_proceso" {{ old('estado') == 'en_proceso' ? 'selected' : '' }}>En Proceso</option>
                <option value="entregado" {{ old('estado') == 'entregado' ? 'selected' : '' }}>Entregado</option>
                <option value="cancelado" {{ old('estado') == 'cancelado' ? 'selected' : '' }}>Cancelado</option>
            </select>
            @error('estado') <div class="error">{{ $message }}</div> @enderror
        </div>
        <button type="submit">Crear Pedido</button>
    </form>

    <p><a href="{{ route('pedidos.index') }}">Volver a la lista de pedidos</a></p>
</body>
</html>