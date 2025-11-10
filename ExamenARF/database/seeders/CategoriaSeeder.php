<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria_ARF;

/**
 * Seeder para productos
 * Autor: ARF (Adrian Rodriguez Fernandez)
 */
class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * Crea productos de ejemplo para demostrar el funcionamiento del sistema.
     */
    public function run(): void
    {
        // Crear productos de ejemplo con datos variados
        $categorias = [
            [
                'nombre' => 'Libros',
                'descripcion' => 'Todos nuestros libros',
                'fabricante' => 'LibrosARF',
                'referencia' => 00001,
            ],
            [
                'nombre' => 'Coches',
                'descripcion' => 'Todos nuestros coches',
                'fabricante' => 'AutomovilesARF',
                'referencia' => 00002,
            ],
            [
                'nombre' => 'Alimentos',
                'descripcion' => 'Todos nuestros Alimentos',
                'fabricante' => 'AlimentacionARF',
                'referencia' => 00003,
            ],
            [
                'nombre' => 'Prendas',
                'descripcion' => 'Todos nuestras prendas',
                'fabricante' => 'TextilARD',
                'referencia' => 00004,
            ],
            [
                'nombre' => 'Electrodomesticos',
                'descripcion' => 'Todos nuestros electrodomesticos',
                'fabricante' => 'ElectrodomesticosARD',
                'referencia' => 00005,
            ],
            [
                'nombre' => 'Electrocica',
                'descripcion' => 'Todos nuestros productos de electronica',
                'fabricante' => 'ElectronicaARF',
                'referencia' => 00006,
            ],
        ];

        // Insertar cada producto en la base de datos
        foreach ($categorias as $categoria) {
            Categoria_ARF::create($categoria);
        }
    }
}