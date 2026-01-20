<?php

namespace Database\Seeders;

use App\Models\UserARF;
use App\Models\PostARF;
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
        // Crear 5 usuarios con sus publicaciones
        UserARF::factory(5)
            ->has(PostARF::factory()->count(3), 'posts')
            ->create();

        // Opcional: Crear un usuario de prueba específico
        $testUser = UserARF::factory()->create([
            'name' => 'Admin User',
            'username' => 'admin',
            'email' => 'admin@example.com',
            'role' => 'admin',
            'active' => true,
        ]);

        // Crear 3 publicaciones para el usuario de prueba
        PostARF::factory()->count(3)->create([
            'user_id' => $testUser->id,
        ]);

        $this->command->info('¡Base de datos poblada exitosamente!');
        $this->command->info('Total usuarios: ' . UserARF::count());
        $this->command->info('Total publicaciones: ' . PostARF::count());
    }
}
