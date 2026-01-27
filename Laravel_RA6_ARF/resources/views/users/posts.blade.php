@extends('layouts.app')

@section('title', 'Publicaciones de Usuario')

@section('content')
    <h1>Publicaciones de {{ $user->name }}</h1>
    <p style="color: #666; margin-bottom: 20px;">Email: {{ $user->email }}</p>
    
    <div class="stats">
        <span class="stats-item"><strong>Total de publicaciones:</strong> {{ $user->posts->count() }}</span>
        <span class="stats-item"><strong>Publicadas:</strong> {{ $user->posts->where('is_published', true)->count() }}</span>
        <span class="stats-item"><strong>No publicadas:</strong> {{ $user->posts->where('is_published', false)->count() }}</span>
    </div>

    @if($user->posts->count() > 0)
        <div class="post-list">
            @foreach($user->posts as $post)
                <div class="post-item">
                    <div class="post-title">{{ $post->title }}</div>
                    <div class="post-content">{{ $post->content }}</div>
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
@endsection
