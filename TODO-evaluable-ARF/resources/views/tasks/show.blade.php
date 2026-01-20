@extends('layouts.app')

@section('title', 'Detalle de Tarea')

@section('content')
<div style="max-width: 700px; margin: 0 auto;">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;">
        <h2 style="color: #fff; font-size: 1.8em; font-weight: 600;">Detalle de Tarea</h2>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">← Volver</a>
    </div>
    
    <div style="background: #333; padding: 25px; border-radius: 8px; border: 1px solid #444;">
        <div style="margin-bottom: 20px;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                <h3 style="color: #fff; font-size: 1.6em; font-weight: 600;">{{ $task->titulo }}</h3>
                <span style="padding: 8px 14px; border-radius: 6px; font-size: 14px; font-weight: 500; background: {{ $task->estado == 'completada' ? '#1e4620' : '#4a3c00' }}; color: {{ $task->estado == 'completada' ? '#a5d6a7' : '#ffc107' }};">
                    {{ $task->estado == 'completada' ? '✅ Completada' : '⏳ Pendiente' }}
                </span>
            </div>
            
            <div style="background: #1a1a1a; padding: 15px; border-radius: 6px; border-left: 3px solid #5865f2; margin-bottom: 15px;">
                <strong style="color: #5865f2;">Descripción:</strong>
                <p style="margin-top: 10px; color: #e0e0e0; line-height: 1.6;">{{ $task->descripcion }}</p>
            </div>
            
            <div style="background: #1a1a1a; padding: 15px; border-radius: 6px; margin-bottom: 15px;">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
                    <div>
                        <strong style="color: #5865f2;">📅 Creada:</strong>
                        <p style="margin-top: 5px; color: #e0e0e0; font-size: 14px;">{{ $task->created_at->format('d/m/Y H:i') }}</p>
                    </div>
                    <div>
                        <strong style="color: #5865f2;">🔄 Última actualización:</strong>
                        <p style="margin-top: 5px; color: #e0e0e0; font-size: 14px;">{{ $task->updated_at->format('d/m/Y H:i') }}</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div style="display: flex; gap: 12px; justify-content: flex-end; border-top: 1px solid #444; padding-top: 20px;">
            <a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display: inline;" onsubmit="return confirm('¿Eliminar esta tarea?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
</div>
@endsection
