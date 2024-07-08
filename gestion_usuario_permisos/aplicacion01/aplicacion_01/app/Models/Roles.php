<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Roles extends Model
{
    use HasFactory;

    protected $fillable = [
        'administrador',
        'usuario', // Nombre del rol (ej. administrador, usuario, etc.)
    ];

    public function permisos(): BelongsToMany
    {
        return $this->belongsToMany(Permisos::class);
    }

    public function usuarios()
    {
        return $this->belongsToMany(App01::class, 'role_user', 'role_id', 'usuario_id');
    }
}
