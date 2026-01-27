@extends('layouts.app')

@section('title', 'Todos los Usuarios')

@section('content')
    <h1>Todos los Usuarios con sus Publicaciones</h1>
    <p style="color: #666; margin-bottom: 20px;">Consulta optimizada con carga ansiosa (eager loading)</p>
    
    <div class="stats">
        <span class="stats-item"><strong>Total de usuarios:</strong> {{ $users->count() }}</span>
        <span class="stats-item"><strong>Total de publicaciones:</strong> {{ $users->sum(fn($u) => $u->posts->count()) }}</span>
    </div>

    @foreach($users as $user)
        <div class="user-card">
            <div class="user-name">{{ $user->name }}</div>
            <div class="user-email">{{ $user->email }}</div>
            
            <h3>Publicaciones ({{ $user->posts->count() }})</h3>
            
            @if($user->posts->count() > 0)
                <div class="post-list">
                    @foreach($user->posts as $post)
                        <div class="post-item">
                            <div class="post-title">{{ $post->title }}</div>
                            <div class="post-content">{{ Str::limit($post->content, 150) }}</div>
                            <div class="post-meta">
                                @if($post->is_published)
                                    <span class="badge badge-success">Publicada</span>
                                    Fecha: {{ $post->published_at->format('d/m/Y H:i') }}
                                @else
                                    <span class="badge badge-warning">No publicada</span>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="no-posts">Este usuario no tiene publicaciones</div>
            @endif
        </div>
    @endforeach
@endsection
