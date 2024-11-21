<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'service';

    // Campos que se pueden asignar de forma masiva
    protected $fillable = [
        'name',
        'description',
        'price',
        'promotionId',
    ];

    /**
     * Relación muchos a uno con Promotion.
     * Cada servicio puede estar asociado a una promoción.
     */
    public function promotion()
    {
        return $this->belongsTo(Promotion::class, 'promotionId');
    }

    /**
     * Relación muchos a muchos con Appointment.
     * Un servicio puede estar asociado a varias citas.
     */
    public function appointments()
    {
        return $this->belongsToMany(Appointment::class, 'appointment_service', 'serviceId', 'appointmentId')
                    ->withPivot('totalPrice')
                    ->withTimestamps();
    }

    /**
     * Relación muchos a muchos con Supply.
     * Un servicio puede requerir múltiples insumos.
     */
    public function supplies()
    {
        return $this->belongsToMany(Supply::class, 'service_supply', 'serviceId', 'supplyId')
                    ->withPivot('quantity', 'unit')
                    ->withTimestamps();
    }
}
