<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel - Usuarios y Publicaciones')</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Arial, sans-serif;
            background: #e8f4f8;
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }
        
        .container {
            max-width: 1000px;
            margin: 0 auto;
            background: white;
            padding: 40px;
            border: 1px solid #cce3ed;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }
        
        h1 {
            color: #1a5f7a;
            margin-bottom: 8px;
            font-size: 1.8em;
            font-weight: 600;
            border-bottom: 3px solid #2e8bc0;
            padding-bottom: 10px;
        }
        
        h2 {
            color: #2e8bc0;
            margin: 25px 0 12px;
            font-size: 1.4em;
            font-weight: 600;
        }
        
        h3 {
            color: #1a5f7a;
            margin: 15px 0 8px;
            font-size: 1.1em;
            font-weight: 600;
        }
        
        .nav {
            background: linear-gradient(135deg, #1a5f7a 0%, #2e8bc0 100%);
            padding: 14px;
            margin: -40px -40px 30px -40px;
            border-bottom: 3px solid #145066;
        }
        
        .nav a {
            color: #fff;
            text-decoration: none;
            padding: 8px 14px;
            margin: 0 3px;
            display: inline-block;
            font-size: 0.9em;
            border-bottom: 2px solid transparent;
            transition: all 0.2s ease;
        }
        
        .nav a:hover {
            border-bottom: 2px solid #fff;
            background: rgba(255,255,255,0.1);
        }
        
        .user-card {
            background: linear-gradient(to right, #f0f9fc 0%, #fafafa 100%);
            border: 1px solid #cce3ed;
            border-left: 4px solid #2e8bc0;
            padding: 20px;
            margin-bottom: 20px;
        }
        
        .user-name {
            font-size: 1.2em;
            color: #1a5f7a;
            margin-bottom: 4px;
            font-weight: 600;
        }
        
        .user-email {
            color: #5a8fa3;
            margin-bottom: 12px;
            font-size: 0.95em;
        }
        
        .post-list {
            margin-top: 15px;
        }
        
        .post-item {
            background: white;
            padding: 15px;
            margin-bottom: 10px;
            border: 1px solid #cce3ed;
            border-left: 3px solid #2e8bc0;
            transition: all 0.2s ease;
        }
        
        .post-item:hover {
            box-shadow: 0 2px 6px rgba(46, 139, 192, 0.15);
        }
        
        .post-title {
            font-weight: 600;
            color: #1a5f7a;
            margin-bottom: 8px;
            font-size: 1.05em;
        }
        
        .post-content {
            color: #555;
            font-size: 0.95em;
            line-height: 1.6;
        }
        
        .post-meta {
            color: #5a8fa3;
            font-size: 0.85em;
            margin-top: 10px;
            padding-top: 8px;
            border-top: 1px solid #e3f2f7;
        }
        
        .badge {
            display: inline-block;
            padding: 3px 10px;
            font-size: 0.8em;
            font-weight: 600;
            color: white;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-radius: 2px;
        }
        
        .badge-success {
            background: linear-gradient(135deg, #27ae60 0%, #229954 100%);
        }
        
        .badge-warning {
            background: linear-gradient(135deg, #f39c12 0%, #d68910 100%);
        }
        
        .badge-info {
            background: linear-gradient(135deg, #2e8bc0 0%, #1a5f7a 100%);
        }
        
        .no-posts {
            color: #999;
            font-style: italic;
            padding: 12px;
            background: #f0f9fc;
            border: 1px dashed #cce3ed;
        }
        
        .stats {
            background: linear-gradient(to right, #e3f2f7 0%, #f0f9fc 100%);
            padding: 15px;
            border: 1px solid #cce3ed;
            border-left: 4px solid #2e8bc0;
            margin-bottom: 20px;
        }
        
        .stats-item {
            display: inline-block;
            margin-right: 25px;
            color: #1a5f7a;
            font-size: 0.95em;
        }
        
        .stats-item strong {
            font-weight: 600;
            color: #145066;
        }
        
        p {
            color: #5a8fa3;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="nav">
            <a href="{{ route('users.index') }}">Todos los Usuarios</a>
            <a href="{{ route('users.with-posts') }}">Usuarios con Publicaciones</a>
            <a href="{{ route('users.with-count') }}">Usuarios con Conteo</a>
            <a href="{{ route('posts.index') }}">Todas las Publicaciones</a>
            <a href="{{ route('posts.published') }}">Publicaciones Publicadas</a>
            <a href="{{ route('users.with-published-posts') }}">Usuarios con Posts Publicados</a>
        </div>
        
        @yield('content')
    </div>
</body>
</html>
