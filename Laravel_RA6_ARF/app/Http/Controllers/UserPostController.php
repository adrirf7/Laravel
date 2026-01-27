<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class UserPostController extends Controller
{
    /**
     * Obtener todos los usuarios con sus publicaciones
     * Usando carga ansiosa (eager loading) con with()
     */
    public function index()
    {
        // Consulta optimizada con carga ansiosa
        $users = User::with('posts')->get();

        return view('users.index', compact('users'));
    }

    /**
     * Obtener las publicaciones de un usuario específico
     */
    public function userPosts($id)
    {
        $user = User::with('posts')->findOrFail($id);

        return view('users.posts', compact('user'));
    }

    /**
     * Obtener solo usuarios que tienen al menos una publicación
     * Consulta compleja usando has()
     */
    public function usersWithPosts()
    {
        // Usuarios que tienen al menos una publicación
        $users = User::has('posts')
            ->with('posts')
            ->get();

        return view('users.with-posts', compact('users'));
    }

    /**
     * Obtener todas las publicaciones con el nombre del autor
     * Consulta compleja con carga ansiosa
     */
    public function postsWithAuthors()
    {
        // Publicaciones con información del usuario autor
        $posts = Post::with('user')->get();

        return view('posts.index', compact('posts'));
    }

    /**
     * Obtener usuarios con el conteo de sus publicaciones
     * Consulta compleja usando withCount()
     */
    public function usersWithPostCount()
    {
        $users = User::withCount('posts')
            ->having('posts_count', '>', 0)
            ->orderBy('posts_count', 'desc')
            ->get();

        return view('users.with-count', compact('users'));
    }

    /**
     * Obtener publicaciones publicadas con sus autores
     * Consulta compleja con condiciones
     */
    public function publishedPosts()
    {
        $posts = Post::with('user')
            ->where('is_published', true)
            ->whereNotNull('published_at')
            ->orderBy('published_at', 'desc')
            ->get();

        return view('posts.published', compact('posts'));
    }

    /**
     * Obtener usuarios con sus publicaciones publicadas
     * Consulta compleja con whereHas()
     */
    public function usersWithPublishedPosts()
    {
        $users = User::whereHas('posts', function ($query) {
            $query->where('is_published', true);
        })
            ->with(['posts' => function ($query) {
                $query->where('is_published', true);
            }])
            ->get();

        return view('users.with-published-posts', compact('users'));
    }
}
