@extends('layouts.app')

@section('title', 'Publicaciones Publicadas')

@section('content')
    <h1>Publicaciones Publicadas</h1>
    <p style="color: #666; margin-bottom: 20px;">Consulta compleja con condiciones where y carga ansiosa</p>
    
    <div class="stats">
        <span class="stats-item"><strong>Total de publicaciones publicadas:</strong> {{ $posts->count() }}</span>
    </div>

    @foreach($posts as $post)
        <div class="post-item">
            <div class="post-title">{{ $post->title }}</div>
            <div class="post-content">{{ Str::limit($post->content, 200) }}</div>
            <div class="post-meta">
                <strong>Autor:</strong> {{ $post->user->name }}
                |
                <span class="badge badge-success">Publicada</span>
                {{ $post->published_at->format('d/m/Y H:i') }}
            </div>
        </div>
    @endforeach
@endsection
