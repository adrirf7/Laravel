@extends('layouts.app')

@section('title', 'Usuarios con Publicaciones')

@section('content')
    <h1>Usuarios que tienen al menos una Publicación</h1>
    <p style="color: #666; margin-bottom: 20px;">Consulta compleja usando has() para filtrar usuarios</p>
    
    <div class="stats">
        <span class="stats-item"><strong>Usuarios con publicaciones:</strong> {{ $users->count() }}</span>
        <span class="stats-item"><strong>Total de publicaciones:</strong> {{ $users->sum(fn($u) => $u->posts->count()) }}</span>
    </div>

    @foreach($users as $user)
        <div class="user-card">
            <div class="user-name">{{ $user->name }}</div>
            <div class="user-email">{{ $user->email }}</div>
            
            <h3>Títulos de sus publicaciones ({{ $user->posts->count() }})</h3>
            
            <div class="post-list">
                @foreach($user->posts as $post)
                    <div class="post-item">
                        <div class="post-title">{{ $post->title }}</div>
                        <div class="post-meta">
                            @if($post->is_published)
                                <span class="badge badge-success">Publicada</span>
                                {{ $post->published_at->format('d/m/Y') }}
                            @else
                                <span class="badge badge-warning">No publicada</span>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
@endsection
