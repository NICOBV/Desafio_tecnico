<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App01 extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'rut',
        'correo',
        'contrasena',
    ];

    public function roles()
    {
        return $this->belongsToMany(Roles::class, 'role_user', 'usuario_id', 'role_id');
    }

    public function permisos()
    {
        return $this->belongsToMany(Permisos::class, 'usuario_permiso', 'usuario_id', 'permiso_id');
    }

    protected $hidden = [
        'contrasena',
        'remember_token',
    ];

    /* Setea automáticamente la contraseña en formato hashed.*/
    public function setPasswordAttribute($value)
    {
        $this->attributes['contrasena'] = Hash::make($value);
    }

    /*Intenta autenticar al usuario utilizando rut y contraseña.*/
    public function validarCredenciales($rut, $contrasena)
    {
        $usuario = $this->where('rut', $rut)->first();

        if (!$usuario) {
            return false;
        }

        return Hash::check($contrasena, $usuario->contrasena);
    }

}
