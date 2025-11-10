<?php

namespace App\Http\Controllers;

use App\Models\Producto_ARF;
use Illuminate\Http\Request;

/**
 * Controlador Producto_ARF_Controller
 * Autor: ARF (Adrian Rodriguez Fernandez)
 */
class Producto_ARF_Controller extends Controller
{
    /**
     * Muestra la lista de todos los productos.
     *
     * Obtiene todos los productos de la base de datos ordenados
     * por nombre y los pasa a la vista para su visualización.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Obtener todos los productos ordenados por nombre
        $productos = Producto_ARF::orderBy('nombre')->get();
        
        // Retornar la vista con los productos
        return view('productos.index', compact('productos'));
    }

    /**
     * Muestra el detalle de un producto específico.
     *
     * Busca un producto por su ID y lo muestra en la vista de detalle.
     * Si no se encuentra, lanza una excepción 404.
     *
     * @param int $id El ID del producto a mostrar
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        // Buscar el producto por ID o lanzar error 404 si no existe
        $producto = Producto_ARF::findOrFail($id);
        
        // Retornar la vista de detalle con el producto
        return view('productos.show', compact('producto'));
    }
}
