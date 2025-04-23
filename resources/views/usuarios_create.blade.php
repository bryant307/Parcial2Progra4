<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Usuario</title>
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
        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <h1>Crear Nuevo Usuario</h1>

    <form action="{{ route('usuarios.store') }}" method="POST">
        @csrf
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
            @error('nombre') <div class="error">{{ $message }}</div> @enderror
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            @error('email') <div class="error">{{ $message }}</div> @enderror
        </div>
        <div>
            <label for="contraseña">Contraseña:</label>
            <input type="password" id="contraseña" name="contraseña" required>
            @error('contraseña') <div class="error">{{ $message }}</div> @enderror
        </div>
        <div>
            <label for="contraseña_confirmation">Confirmar Contraseña:</label>
            <input type="password" id="contraseña_confirmation" name="contraseña_confirmation" required>
        </div>
        <div>
            <label for="rol">Rol:</label>
            <select id="rol" name="rol">
                <option value="cliente" {{ old('rol') == 'cliente' ? 'selected' : '' }}>Cliente</option>
                <option value="admin" {{ old('rol') == 'admin' ? 'selected' : '' }}>Administrador</option>
            </select>
            @error('rol') <div class="error">{{ $message }}</div> @enderror
        </div>
        <button type="submit">Guardar Usuario</button>
    </form>

    <p><a href="{{ route('usuarios.index') }}">Volver a la lista de usuarios</a></p>
</body>
</html>