<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    // Especifica el nombre de la tabla en la base de datos
    protected $table = 'client';
    protected $primaryKey = 'userId';

    // Campos que pueden ser llenados masivamente
    protected $fillable = [
        'userId',
        'address',
    ];

    /**
     * Relación uno a uno con la tabla `users`.
     * Un cliente está asociado a un usuario.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }

    /**
     * Relación uno a muchos con la tabla `pet`.
     * Un cliente puede tener muchas mascotas.
     */
    public function pets()
    {
        return $this->hasMany(Pet::class, 'clientId');
    }

    /**
     * Relación uno a muchos con la tabla `appointment`.
     * Un cliente puede tener varias citas médicas.
     */
    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'clientId');
    }
}
