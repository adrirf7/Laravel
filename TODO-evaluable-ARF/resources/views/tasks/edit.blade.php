@extends('layouts.app')

@section('title', 'Editar Tarea')

@section('content')
<div style="max-width: 700px; margin: 0 auto;">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;">
        <h2 style="color: #fff; font-size: 1.8em; font-weight: 600;">Editar Tarea</h2>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">← Volver</a>
    </div>
    
    <form action="{{ route('tasks.update', $task) }}" method="POST" style="background: #333; padding: 25px; border-radius: 8px; border: 1px solid #444;">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="titulo" style="color: #fff;">Título *</label>
            <input 
                type="text" 
                name="titulo" 
                id="titulo" 
                class="form-control @error('titulo') is-invalid @enderror" 
                value="{{ old('titulo', $task->titulo) }}" 
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
            >{{ old('descripcion', $task->descripcion) }}</textarea>
            @error('descripcion')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="estado" style="color: #fff;">Estado *</label>
            <select name="estado" id="estado" class="form-control @error('estado') is-invalid @enderror" required>
                <option value="pendiente" {{ old('estado', $task->estado) == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                <option value="completada" {{ old('estado', $task->estado) == 'completada' ? 'selected' : '' }}>Completada</option>
            </select>
            @error('estado')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3" style="padding: 12px; background: #1a1a1a; border-radius: 6px; border-left: 3px solid #5865f2; font-size: 13px; color: #aaa;">
            <strong style="color: #fff;">Creada:</strong> {{ $task->created_at->format('d/m/Y H:i') }}<br>
            <strong style="color: #fff;">Última actualización:</strong> {{ $task->updated_at->format('d/m/Y H:i') }}
        </div>
        
        <div style="display: flex; gap: 12px; justify-content: flex-end; margin-top: 25px;">
            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-success">Actualizar Tarea</button>
        </div>
    </form>
</div>
@endsection
