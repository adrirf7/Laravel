# Instrucciones para configurar y ejecutar el proyecto Laravel

## 1. Crear la base de datos en MySQL

Antes de ejecutar las migraciones, debes crear la base de datos en MySQL Workbench o desde la línea de comandos de MySQL.

### Opción A: Desde MySQL Workbench

1. Abre MySQL Workbench
2. Conéctate a tu servidor MySQL
3. Ejecuta esta consulta:

```sql
CREATE DATABASE laravel_ra6_arf CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

### Opción B: Desde la línea de comandos de MySQL

```bash
mysql -u root -p
CREATE DATABASE laravel_ra6_arf CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
exit;
```

## 2. Ejecutar las migraciones

Una vez creada la base de datos, ejecuta:

```bash
php artisan migrate:fresh
```

## 3. Poblar la base de datos con datos de prueba

```bash
php artisan db:seed
```

## 4. Iniciar el servidor de desarrollo

```bash
php artisan serve
```

## 5. Acceder a las diferentes vistas

Una vez el servidor esté corriendo, puedes acceder a:

- http://localhost:8000/users - Todos los usuarios con sus publicaciones
- http://localhost:8000/users-with-posts - Usuarios que tienen al menos una publicación
- http://localhost:8000/users-with-count - Usuarios ordenados por número de publicaciones
- http://localhost:8000/posts - Todas las publicaciones con el nombre del autor
- http://localhost:8000/posts/published - Solo publicaciones publicadas
- http://localhost:8000/users-with-published-posts - Usuarios con publicaciones publicadas

## 6. Ver la base de datos en MySQL Workbench

Desde MySQL Workbench podrás:

- Ver las tablas: users, posts, sessions, cache, jobs, password_reset_tokens
- Consultar los datos
- Ver las relaciones entre tablas

## Resumen de lo implementado

✅ Base de datos configurada para MySQL
✅ Migraciones actualizadas con los campos correctos
✅ Modelos User y Post con relaciones:

- User → hasMany(Post)
- Post → belongsTo(User)
  ✅ Factories para generar datos de prueba
  ✅ Seeders para poblar la base de datos (11 usuarios + múltiples publicaciones)
  ✅ Controlador con múltiples consultas Eloquent:
- Carga ansiosa con with()
- Consultas complejas con has(), whereHas(), withCount()
  ✅ 7 vistas Blade diferentes mostrando:
- Usuarios con sus publicaciones
- Filtros por usuarios con publicaciones
- Filtros por publicaciones publicadas
- Información del autor en cada publicación

## Contraseña por defecto para los usuarios generados

Todos los usuarios tienen la contraseña: `password`
