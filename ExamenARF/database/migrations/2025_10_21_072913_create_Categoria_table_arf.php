<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Autor: ARF
     */
    public function up(): void
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id()->nullable(false);
            $table->string('nombre')->nullable(false);
            $table->text('descripcion')->nullable(false);
            $table->text('fabricante')->nullable(false);
            $table->integer('referencia')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorias');
    }
};