<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gestión de Productos')</title>
    @yield('styles')
</head>
<body>
    <!-- Encabezado -->
    <header>
        <h1>Sistema de Gestión de Productos</h1>
        <nav>
            <a href="/">Inicio</a> |
            <a href="{{ route('productos.index') }}">Lista de Productos</a>
        </nav>
    </header>

    <hr>

    <!-- Contenido principal -->
    <main>
        @yield('content')
    </main>

    <hr>

    <!-- Pie de página -->
    <footer>
        <p>&copy; {{ date('Y') }} Sistema de Gestión de Productos</p>
        <p>Desarrollado con Laravel - Actividad Evaluable - ARF</p>
    </footer>

    @yield('scripts')
</body>
</html>
