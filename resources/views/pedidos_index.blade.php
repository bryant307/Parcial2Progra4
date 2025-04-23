<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pedidos</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
        }
        h1 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <h1>Lista de Pedidos</h1>

    <p><a href="{{ route('pedidos.create') }}">Crear Nuevo Pedido</a></p>

    @if (count($pedidos) > 0)
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Total</th>
                    <th>Estado</th>
                    <th>Creado En</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pedidos as $pedido)
                    <tr>
                        <td>{{ $pedido->id }}</td>
                        <td>{{ $pedido->usuario->nombre }} (ID: {{ $pedido->id_usuario }})</td>
                        <td>${{ number_format($pedido->total, 2) }}</td>
                        <td>{{ $pedido->estado }}</td>
                        <td>{{ $pedido->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay pedidos registrados.</p>
    @endif
</body>
</html> 