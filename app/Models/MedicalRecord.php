<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalRecord extends Model
{
    use HasFactory;

    protected $table = 'medicalRecord';

    // Campos que se pueden asignar de forma masiva
    protected $fillable = [
        'petId',
        'date',
        'description',
    ];

    /**
     * Relación muchos a uno con Pet.
     * Cada registro médico pertenece a una mascota.
     */
    public function pet()
    {
        return $this->belongsTo(Pet::class, 'petId');
    }
}
