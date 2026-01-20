@extends('layouts.app')

@section('title', 'Crear Tarea')

@section('content')
<div style="max-width: 700px; margin: 0 auto;">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;">
        <h2 style="color: #fff; font-size: 1.8em; font-weight: 600;">+ Nueva Tarea</h2>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">← Volver</a>
    </div>
    
    <form action="{{ route('tasks.store') }}" method="POST" style="background: #333; padding: 25px; border-radius: 8px; border: 1px solid #444;">
        @csrf
        
        <div class="form-group">
            <label for="titulo" style="color: #fff;">Título *</label>
            <input 
                type="text" 
                name="titulo" 
                id="titulo" 
                class="form-control @error('titulo') is-invalid @enderror" 
                value="{{ old('titulo') }}" 
                placeholder="Ej: Comprar víveres"
                required
            >
            @error('titulo')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="descripcion" style="color: #fff;">Descripción *</label>
            <textarea 
                name="descripcion" 
                id="descripcion" 
                class="form-control @error('descripcion') is-invalid @enderror" 
                rows="5" 
                placeholder="Describe los detalles de la tarea..."
                required
            >{{ old('descripcion') }}</textarea>
            @error('descripcion')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>
        
        <input type="hidden" name="estado" value="pendiente">
        
        <div style="display: flex; gap: 12px; justify-content: flex-end; margin-top: 25px;">
            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-success">Guardar Tarea</button>
        </div>
    </form>
</div>
@endsection
