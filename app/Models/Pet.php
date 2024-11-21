<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $table = 'pet';

    // Campos que se pueden asignar de forma masiva
    protected $fillable = [
        'clientId',
        'name',
        'species',
        'breed',
        'age',
        'weight',
        'gender',
        'allergies',
    ];

    /**
     * Relación muchos a uno con Client.
     * Cada mascota pertenece a un cliente.
     */
    public function client()
    {
        return $this->belongsTo(Client::class, 'clientId');
    }

    /**
     * Relación uno a muchos con MedicalRecord.
     * Una mascota puede tener múltiples registros médicos.
     */
    public function medicalRecords()
    {
        return $this->hasMany(MedicalRecord::class, 'petId');
    }

}
