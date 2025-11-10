@extends('layouts.app')

@section('title', $categorias->nombre)

@section('content')
<p><a href="{{ route('categorias.index') }}">← Volver a la lista</a></p>

<h2>Detalle de la categoria</h2>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>ID</th>
        <td>{{ $categorias->id }}</td>
    </tr>
    <tr>
        <th>Nombre</th>
        <td><strong>{{ $categorias->nombre }}</strong></td>
    </tr>
    <tr>
        <th>Descripción</th>
        <td>{{ $categorias->descripcion ?? 'Este producto no tiene descripción disponible.' }}</td>
    </tr>
        <tr>
        <th>Fabricante</th>
        <td>{{ $categorias->fabricante }} unidades</td>
    </tr>
    <tr>
        <th>Referencia</th>
        <td>{{ number_format($categorias->referencia, 2) }}</td>
    </tr>
    <tr>
        <th>Fecha de Registro</th>
        <td>{{ $categorias->created_at->format('d/m/Y H:i') }}</td>
    </tr>
    <tr>
        <th>Última Actualización</th>
        <td>{{ $categorias->updated_at->format('d/m/Y H:i') }}</td>
    </tr>
</table>

<br>
<p><a href="{{ route('categorias.index') }}">← Volver a la lista</a></p>
@endsection
