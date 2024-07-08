<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Permisos extends Model
{
    protected $fillable = [
        'nombre', // Nombre del permiso (ej. crear_usuario, editar_usuario, etc.)
        'descripcion', // Descripción opcional del permiso
    ];

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Roles::class);
    }
}
