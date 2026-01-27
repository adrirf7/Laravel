@extends('layouts.app')

@section('title', 'Todas las Publicaciones')

@section('content')
    <h1>Todas las Publicaciones con el Nombre del Autor</h1>
    <p style="color: #666; margin-bottom: 20px;">Consulta compleja con carga ansiosa de la relación belongsTo</p>
    
    <div class="stats">
        <span class="stats-item"><strong>Total de publicaciones:</strong> {{ $posts->count() }}</span>
        <span class="stats-item"><strong>Publicadas:</strong> {{ $posts->where('is_published', true)->count() }}</span>
    </div>

    @foreach($posts as $post)
        <div class="post-item">
            <div class="post-title">{{ $post->title }}</div>
            <div class="post-content">{{ Str::limit($post->content, 200) }}</div>
            <div class="post-meta">
                <strong>Autor:</strong> {{ $post->user->name }} ({{ $post->user->email }})
                |
                @if($post->is_published)
                    <span class="badge badge-success">Publicada</span>
                    {{ $post->published_at->format('d/m/Y H:i') }}
                @else
                    <span class="badge badge-warning">No publicada</span>
                @endif
            </div>
        </div>
    @endforeach
@endsection
