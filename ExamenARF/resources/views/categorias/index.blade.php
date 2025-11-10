@extends('layouts.app')

@section('title', 'Lista de Productos')

@section('content')
<h2>Categorias || Adrian Rodriguez Fernandez</h2>
<p>Total de Categorias: <strong>{{ $categorias->count() }}</strong></p>

<br>

@if($categorias->count() > 0)
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Fabricante</th>
                <th>Referencia</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $categoria)
            <tr>
                <td>{{ $categoria->id }}</td>
                <td>{{ $categoria->nombre }}</td>
                <td>{{ Str::limit($categoria->descripcion ?? 'Sin descripción', 50) }}</td>
                <td>{{ $categoria->fabricante }}</td>
                <td>{{ number_format($categoria->referencia, 2) }}</td>
                <td>
                    <a href="{{ route('categorias.show', $categoria->id) }}">Ver Detalles</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>No hay categorias disponibles en el catálogo.</p>
@endif
@endsection
