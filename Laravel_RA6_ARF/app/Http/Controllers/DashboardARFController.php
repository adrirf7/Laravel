<?php

namespace App\Http\Controllers;

use App\Models\UserARF;
use App\Models\PostARF;
use Illuminate\Http\Request;

class DashboardARFController extends Controller
{
    /**
     * Muestra todos los usuarios y publicaciones
     */
    public function index()
    {
        $users = UserARF::with('posts')->get();
        $posts = PostARF::with('user')->orderBy('created_at', 'desc')->get();

        return view('dashboard', compact('users', 'posts'));
    }
}
