<?php

namespace App\Http\Controllers;

use App\Models\Categoria_ARF;
use Illuminate\Http\Request;

/**
 * Controlador Producto_ARF_Controller
 * Autor: ARF (Adrian Rodriguez Fernandez)
 */
class Categoria_ARF_Controller extends Controller
{
    /**
     * Muestra la lista de todos las Categorias.
     *
     * Obtiene todos las categorias de la base de datos ordenados
     * por nombre y los pasa a la vista para su visualización.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Obtener todas las categorias ordenadas por nombre
        $categorias = Categoria_ARF::orderBy('nombre')->get();

        // Retornar la vista con los productos
        return view('categorias.index', compact('categorias'));
    }

    /**
     * Muestra el detalle de una categoria específica.
     *
     * Busca un producto por su ID y lo muestra en la vista de detalle.
     * Si no se encuentra, lanza una excepción 404.
     *
     * @param int $id El ID del producto a mostrar
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        // Buscar la categoria por ID o lanzar error 404 si no existe
        $categorias = Categoria_ARF::findOrFail($id);

        // Retornar la vista de detalle con el producto
        return view('categorias.show', compact('categorias'));
    }
}