<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Usuarios y Publicaciones</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background: #f5f5f5;
        }
        
        .container {
            max-width: 1400px;
            margin: 0 auto;
            background: white;
            padding: 20px;
        }
        
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        
        h2 {
            margin-bottom: 15px;
            margin-top: 30px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }
        
        th {
            background: #333;
            color: white;
            padding: 10px;
            text-align: left;
        }
        
        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        
        tr:hover {
            background: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Dashboard - Usuarios y Publicaciones</h1>
        
        <h2>Usuarios</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Activo</th>
                    <th>Publicaciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td>{{ $user->active ? 'Sí' : 'No' }}</td>
                        <td>{{ $user->posts->count() }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7">No hay usuarios</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        
        <h2>Publicaciones</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Categoría</th>
                    <th>Vistas</th>
                    <th>Publicada</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                @forelse($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->user->name }}</td>
                        <td>{{ $post->category }}</td>
                        <td>{{ $post->views }}</td>
                        <td>{{ $post->is_published ? 'Sí' : 'No' }}</td>
                        <td>{{ $post->published_at ? $post->published_at->format('d/m/Y') : '-' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7">No hay publicaciones</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
