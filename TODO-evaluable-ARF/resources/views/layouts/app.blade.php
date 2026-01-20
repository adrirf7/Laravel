<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Gestor de Tareas')</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #1a1a1a;
            min-height: 100vh;
            padding: 20px;
            color: #e0e0e0;
        }
        
        .container {
            max-width: 900px;
            margin: 40px auto;
            background: #2d2d2d;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.5);
            overflow: hidden;
        }
        
        .header {
            background: #333;
            color: #fff;
            padding: 25px;
            text-align: center;
            border-bottom: 1px solid #444;
        }
        
        .header h1 {
            font-size: 2em;
            margin-bottom: 5px;
            font-weight: 600;
        }
        
        .content {
            padding: 30px;
            background: #2d2d2d;
        }
        
        .alert {
            padding: 12px 20px;
            margin-bottom: 20px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .alert-success {
            background-color: #1e4620;
            border-left: 3px solid #4caf50;
            color: #a5d6a7;
        }
        
        .alert-error {
            background-color: #4a1e1e;
            border-left: 3px solid #f44336;
            color: #ef9a9a;
        }
        
        .btn {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 500;
            transition: all 0.2s;
            border: none;
            cursor: pointer;
            font-size: 14px;
        }
        
        .btn-primary {
            background: #5865f2;
            color: white;
        }
        
        .btn-primary:hover {
            background: #4752c4;
        }
        
        .btn-success {
            background: #4caf50;
            color: white;
        }
        
        .btn-success:hover {
            background: #43a047;
        }
        
        .btn-warning {
            background: #ff9800;
            color: white;
        }
        
        .btn-warning:hover {
            background: #fb8c00;
        }
        
        .btn-danger {
            background: #f44336;
            color: white;
        }
        
        .btn-danger:hover {
            background: #e53935;
        }
        
        .btn-secondary {
            background: #555;
            color: white;
        }
        
        .btn-secondary:hover {
            background: #666;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #333;
        }
        
        .form-control {
            width: 100%;
            padding: 12px;
            border: 1px solid #444;
            border-radius: 6px;
            font-size: 15px;
            transition: border-color 0.2s;
            background: #1a1a1a;
            color: #e0e0e0;
        }
        
        .form-control:focus {
            outline: none;
            border-color: #5865f2;
        }
        
        .error-message {
            color: #ef9a9a;
            font-size: 13px;
            margin-top: 5px;
        }
        
        .task-item {
            background: #333;
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 15px;
            transition: all 0.2s;
            border: 1px solid #444;
        }
        
        .task-item:hover {
            background: #3a3a3a;
            border-color: #555;
        }
        
        .task-item.completed {
            opacity: 0.6;
        }
        
        .task-item.completed .task-title {
            text-decoration: line-through;
            color: #888;
        }
        
        .checkbox {
            width: 22px;
            height: 22px;
            cursor: pointer;
            accent-color: #5865f2;
        }
        
        .task-content {
            flex: 1;
        }
        
        .task-title {
            font-size: 16px;
            font-weight: 500;
            margin-bottom: 4px;
            color: #fff;
        }
        
        .task-description {
            font-size: 14px;
            color: #aaa;
            margin-bottom: 8px;
        }
        
        .task-date {
            font-size: 12px;
            color: #777;
        }
        
        .actions {
            display: flex;
            gap: 8px;
            flex-shrink: 0;
        }
        
        .mb-3 {
            margin-bottom: 20px;
        }
        
        .text-muted {
            color: #888;
            font-size: 13px;
        }
        
        select option {
            background: #1a1a1a;
            color: #e0e0e0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            @if(session('success'))
                <div class="alert alert-success">
                    <span>{{ session('success') }}</span>
                </div>
            @endif
            
            @if(session('error'))
                <div class="alert alert-error">
                    <span>{{ session('error') }}</span>
                </div>
            @endif
            
            @yield('content')
        </div>
    </div>
</body>
</html>
