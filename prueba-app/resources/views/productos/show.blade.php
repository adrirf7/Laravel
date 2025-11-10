@extends('layouts.app')

@section('title', $producto->nombre)

@section('content')
<p><a href="{{ route('productos.index') }}">← Volver a la lista</a></p>

<h2>Detalle del Producto</h2>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>ID</th>
        <td>{{ $producto->id }}</td>
    </tr>
    <tr>
        <th>Nombre</th>
        <td><strong>{{ $producto->nombre }}</strong></td>
    </tr>
    <tr>
        <th>Descripción</th>
        <td>{{ $producto->descripcion ?? 'Este producto no tiene descripción disponible.' }}</td>
    </tr>
    <tr>
        <th>Precio</th>
        <td>${{ number_format($producto->precio, 2) }}</td>
    </tr>
    <tr>
        <th>Stock Disponible</th>
        <td>{{ $producto->stock }} unidades</td>
    </tr>
    <tr>
        <th>Estado</th>
        <td>
            @if($producto->stock > 10)
                DISPONIBLE - Stock suficiente
            @elseif($producto->stock > 0)
                STOCK BAJO - Pocas unidades disponibles
            @else
                AGOTADO - Sin stock disponible
            @endif
        </td>
    </tr>
    <tr>
        <th>Fecha de Registro</th>
        <td>{{ $producto->created_at->format('d/m/Y H:i') }}</td>
    </tr>
    <tr>
        <th>Última Actualización</th>
        <td>{{ $producto->updated_at->format('d/m/Y H:i') }}</td>
    </tr>
</table>

<br>
<p><a href="{{ route('productos.index') }}">← Volver a la lista</a></p>
@endsection
