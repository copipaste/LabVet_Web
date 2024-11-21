<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'admin';

    // Campos que se pueden asignar de forma masiva
    protected $fillable = [
        'userId',
        'position',
    ];

    /**
     * Relación muchos a uno con AppUser.
     * Cada administrador está vinculado a un usuario.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }

}