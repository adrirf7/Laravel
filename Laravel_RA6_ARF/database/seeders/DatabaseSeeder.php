<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crear 10 usuarios con publicaciones variadas
        User::factory(10)->create()->each(function ($user) {
            // Cada usuario tendrá entre 2 y 5 publicaciones
            Post::factory(rand(2, 5))->create([
                'user_id' => $user->id,
            ]);
        });

        // Crear un usuario de prueba específico
        $testUser = User::factory()->create([
            'name' => 'Adrian Test',
            'email' => 'adrian@test.com',
        ]);

        // Crear 5 publicaciones para el usuario de prueba
        Post::factory()->count(5)->create([
            'user_id' => $testUser->id,
        ]);

        $this->command->info('¡Base de datos poblada exitosamente!');
        $this->command->info('Total usuarios: ' . User::count());
        $this->command->info('Total publicaciones: ' . Post::count());
    }
}
