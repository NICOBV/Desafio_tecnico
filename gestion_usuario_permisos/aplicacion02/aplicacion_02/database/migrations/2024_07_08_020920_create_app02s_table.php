<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('app02', function (Blueprint $table) {
            $table->id();
            $table->string ('nombre_razon_social');
            $table->string ('rut')->unique();
            $table->integer ('telefono');
            $table->string ('email')->unique();
            $table->string ('direccion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app02');
    }
};
