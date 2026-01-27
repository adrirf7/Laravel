@extends('layouts.app')

@section('title', 'Usuarios con Conteo de Publicaciones')

@section('content')
    <h1>Usuarios ordenados por número de Publicaciones</h1>
    <p style="color: #666; margin-bottom: 20px;">Consulta compleja usando withCount() y orderBy()</p>
    
    <div class="stats">
        <span class="stats-item"><strong>Total de usuarios con publicaciones:</strong> {{ $users->count() }}</span>
    </div>

    @foreach($users as $user)
        <div class="user-card">
            <div class="user-name">
                {{ $user->name }}
                <span class="badge badge-info">{{ $user->posts_count }} publicación(es)</span>
            </div>
            <div class="user-email">{{ $user->email }}</div>
        </div>
    @endforeach
@endsection
