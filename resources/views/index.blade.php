<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        .module-links {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .module-links a {
            display: inline-block;
            padding: 10px 15px;
            text-decoration: none;
            color: white;
            background-color: #007bff;
            border-radius: 5px;
        }
        .module-links a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Panel de Control</h1>

    <div class="module-links">
        <h2>Usuarios</h2>
        <a href="{{ route('usuarios.index') }}">Ver Usuarios</a>
        <a href="{{ route('usuarios.create') }}">Agregar Usuario</a>

        <h2>Productos</h2>
        <a href="{{ route('productos_index') }}">Ver Productos</a>
        <a href="{{ route('productos.create') }}">Agregar Producto</a>

        <h2>Pedidos</h2>
        <a href="{{ route('pedidos.index') }}">Ver Pedidos</a>
        <a href="{{ route('pedidos.create') }}">Agregar Pedido</a>
    </div>
</body>
</html>