<h1>Lista de Productos</h1>
<p><a href="{{ route('productos.create') }}">Crear Nuevo Producto</a></p>

@if (count($productos) > 0)
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Imagen</th>
                <th>Creado En</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->descripcion ?? 'Sin descripción' }}</td>
                    <td>${{ number_format($producto->precio, 2) }}</td>
                    <td>{{ $producto->stock }}</td>
                    <td>
                        @if ($producto->imagen)
                            <img src="{{ asset('storage/' . $producto->imagen) }}" alt="{{ $producto->nombre }}" style="max-width: 50px; max-height: 50px;">
                        @else
                            Sin imagen
                        @endif
                    </td>
                    <td>{{ $producto->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>No hay productos disponibles.</p>
@endif