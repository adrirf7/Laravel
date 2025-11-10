@extends('layouts.app')

@section('title', 'Lista de Productos')

@section('content')
<h2>Catálogo de Productos</h2>
<p>Total de productos: <strong>{{ $productos->count() }}</strong></p>

<br>

@if($productos->count() > 0)
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
            <tr>
                <td>{{ $producto->id }}</td>
                <td>{{ $producto->nombre }}</td>
                <td>{{ Str::limit($producto->descripcion ?? 'Sin descripción', 50) }}</td>
                <td>${{ number_format($producto->precio, 2) }}</td>
                <td>
                    @if($producto->stock > 10)
                        {{ $producto->stock }} (Disponible)
                    @elseif($producto->stock > 0)
                        {{ $producto->stock }} (Stock cdsdsdsdssssssssssssssssssssssssssssssssssssssssssssssss)
                    @else
                        Agotado
                    @endif
                </td>
                <td>
                    <a href="{{ route('productos.show', $producto->id) }}">Ver Detalle</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>No hay productos disponibles en el catálogo.</p>
@endif
@endsection
