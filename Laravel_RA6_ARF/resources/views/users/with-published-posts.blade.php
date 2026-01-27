@extends('layouts.app')

@section('title', 'Usuarios con Publicaciones Publicadas')

@section('content')
    <h1>Usuarios con Publicaciones Publicadas</h1>
    <p style="color: #666; margin-bottom: 20px;">Consulta compleja usando whereHas() para filtrar usuarios y relaciones</p>
    
    <div class="stats">
        <span class="stats-item"><strong>Usuarios con posts publicados:</strong> {{ $users->count() }}</span>
        <span class="stats-item"><strong>Total de posts publicados:</strong> {{ $users->sum(fn($u) => $u->posts->count()) }}</span>
    </div>

    @foreach($users as $user)
        <div class="user-card">
            <div class="user-name">{{ $user->name }}</div>
            <div class="user-email">{{ $user->email }}</div>
            
            <h3>Publicaciones Publicadas ({{ $user->posts->count() }})</h3>
            
            <div class="post-list">
                @foreach($user->posts as $post)
                    <div class="post-item">
                        <div class="post-title">{{ $post->title }}</div>
                        <div class="post-content">{{ Str::limit($post->content, 150) }}</div>
                        <div class="post-meta">
                            <span class="badge badge-success">Publicada</span>
                            {{ $post->published_at->format('d/m/Y H:i') }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
@endsection
