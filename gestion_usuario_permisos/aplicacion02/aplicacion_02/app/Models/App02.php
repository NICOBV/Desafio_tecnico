<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App02 extends Model
{
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_razon_social');
            $table->string('rut')->unique();
            $table->string('telefono');
            $table->string('email')->unique();
            $table->string('direccion_matriz');
            $table->timestamps();
        });
    }

}
