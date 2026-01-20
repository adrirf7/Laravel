@extends('layouts.app')

@section('title', 'Lista de Tareas')

@section('content')
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;">
    <h2 style="color: #fff; font-size: 1.8em; font-weight: 600;">Mis Tareas</h2>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">+ Nueva Tarea</a>
</div>

@if($tasks->isEmpty())
    <div style="text-align: center; padding: 60px 20px; color: #888;">
        <p style="font-size: 1.3em; margin-bottom: 10px;">📋 No hay tareas registradas</p>
        <p>¡Comienza agregando tu primera tarea!</p>
        <a href="{{ route('tasks.create') }}" class="btn btn-primary" style="margin-top: 20px;">Crear Primera Tarea</a>
    </div>
@else
    <div>
        @foreach($tasks as $task)
            <div class="task-item {{ $task->estado == 'completada' ? 'completed' : '' }}">
                <input 
                    type="checkbox" 
                    class="checkbox" 
                    {{ $task->estado == 'completada' ? 'checked' : '' }}
                    onchange="toggleTask({{ $task->id }}, this.checked)"
                >
                <div class="task-content">
                    <div class="task-title">{{ $task->titulo }}</div>
                    <div class="task-description">{{ Str::limit($task->descripcion, 100) }}</div>
                    <div class="task-date">📅 {{ $task->created_at->format('d/m/Y H:i') }}</div>
                </div>
                <div class="actions">
                    <a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning" style="padding: 8px 14px; font-size: 13px;">Editar</a>
                    <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display: inline;" onsubmit="return confirm('¿Eliminar esta tarea?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" style="padding: 8px 14px; font-size: 13px;">Eliminar</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
    
    <div style="margin-top: 25px; padding: 15px; background: #333; border-radius: 8px; text-align: center; font-size: 14px; color: #aaa;">
        <strong style="color: #fff;">Total:</strong> {{ $tasks->count() }} | 
        <strong style="color: #4caf50;">Completadas:</strong> {{ $tasks->where('estado', 'completada')->count() }} | 
        <strong style="color: #ff9800;">Pendientes:</strong> {{ $tasks->where('estado', 'pendiente')->count() }}
    </div>
@endif

<script>
function toggleTask(taskId, isCompleted) {
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    
    fetch(`/tasks/${taskId}`, {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken,
            'Accept': 'application/json'
        },
        body: JSON.stringify({
            _method: 'PUT',
            estado: isCompleted ? 'completada' : 'pendiente'
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            location.reload();
        }
    })
    .catch(error => {
        console.error('Error:', error);
        location.reload();
    });
}
</script>
@endsection
