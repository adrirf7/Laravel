<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto_ARF;

/**
 * Seeder para productos
 * Autor: ARF (Adrian Rodriguez Fernandez)
 */
class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * Crea productos de ejemplo para demostrar el funcionamiento del sistema.
     */
    public function run(): void
    {
        // Crear productos de ejemplo con datos variados
        $productos = [
            [
                'nombre' => 'Cafetera Express Nespresso',
                'descripcion' => 'Cafetera de cápsulas con sistema de presión de 19 bares, depósito de 1 litro y función de apagado automático.',
                'precio' => 159.99,
                'stock' => 20,
            ],
            [
                'nombre' => 'Zapatillas Nike Air Max',
                'descripcion' => 'Zapatillas deportivas con tecnología Air Max, suela de goma resistente y diseño transpirable. Ideales para running.',
                'precio' => 129.99,
                'stock' => 45,
            ],
            [
                'nombre' => 'Libro "Cien Años de Soledad"',
                'descripcion' => 'Obra maestra de Gabriel García Márquez. Edición de lujo con tapa dura y páginas de alta calidad.',
                'precio' => 24.99,
                'stock' => 8,
            ],
            [
                'nombre' => 'Sartén Antiadherente 28cm',
                'descripcion' => 'Sartén profesional con recubrimiento antiadherente de titanio, apta para todo tipo de cocinas incluyendo inducción.',
                'precio' => 45.50,
                'stock' => 15,
            ],
            [
                'nombre' => 'Mochila de Viaje Samsonite',
                'descripcion' => 'Mochila ergonómica con compartimento para laptop de 15", múltiples bolsillos y material resistente al agua.',
                'precio' => 89.99,
                'stock' => 0,
            ],
            [
                'nombre' => 'Juego de Sábanas Queen Size',
                'descripcion' => 'Juego de sábanas de algodón egipcio 100%, incluye sábana ajustable, sábana superior y dos fundas de almohada.',
                'precio' => 69.99,
                'stock' => 30,
            ],
            [
                'nombre' => 'Reloj Casio G-Shock',
                'descripcion' => 'Reloj deportivo resistente al agua hasta 200m, cronómetro, alarma y luz LED. Ideal para actividades extremas.',
                'precio' => 119.00,
                'stock' => 5,
            ],
            [
                'nombre' => 'Planta Monstera Deliciosa',
                'descripcion' => 'Planta de interior de gran tamaño, fácil cuidado, hojas decorativas. Incluye maceta de cerámica blanca.',
                'precio' => 35.99,
                'stock' => 12,
            ],
        ];

        // Insertar cada producto en la base de datos
        foreach ($productos as $producto) {
            Producto_ARF::create($producto);
        }
    }
}
