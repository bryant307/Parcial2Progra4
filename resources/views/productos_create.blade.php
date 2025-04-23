<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Producto</title>
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
            width: 400px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="number"],
        input[type="decimal"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button[type="submit"] {
            background-color: #008CBA;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #0077b3;
        }
        .error {
            color: red;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <h1>Crear Nuevo Producto</h1>

    <form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
            @error('nombre') <div class="error">{{ $message }}</div> @enderror
        </div>
        <div>
            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion">{{ old('descripcion') }}</textarea>
            @error('descripcion') <div class="error">{{ $message }}</div> @enderror
        </div>
        <div>
            <label for="precio">Precio:</label>
            <input type="number" step="0.01" id="precio" name="precio" value="{{ old('precio') }}" required>
            @error('precio') <div class="error">{{ $message }}</div> @enderror
        </div>
        <div>
            <label for="stock">Stock:</label>
            <input type="number" id="stock" name="stock" value="{{ old('stock', 0) }}" required>
            @error('stock') <div class="error">{{ $message }}</div> @enderror
        </div>
        <div>
            <label for="imagen">Imagen (opcional):</label>
            <input type="file" id="imagen" name="imagen">
            @error('imagen') <div class="error">{{ $message }}</div> @enderror
        </div>
        <button type="submit">Guardar Producto</button>
    </form>

    <p><a href="{{ route('productos.index') }}">Volver a la lista de productos</a></p>
</body>
</html>