<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    
    // Especifica el nombre de la tabla en la base de datos
    protected $table = 'appointment';

    // Campos que pueden ser llenados masivamente
    protected $fillable = [
        'date',
        'status',
        'clientId',
        'doctorId',
    ];

    /**
     * Relación muchos a uno con la tabla `client`.
     * Una cita pertenece a un cliente.
     */
    public function client()
    {
        return $this->belongsTo(Client::class, 'clientId');
    }

    /**
     * Relación muchos a uno con la tabla `doctor`.
     * Una cita pertenece a un doctor.
     */
    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctorId');
    }

    /**
     * Relación muchos a muchos con la tabla `service` a través de `appointment_service`.
     * Una cita puede tener varios servicios asociados.
     */
    public function services()
    {
        return $this->belongsToMany(Service::class, 'appointment_service', 'appointmentId', 'serviceId')
                    ->withPivot('totalPrice');
    }

    /**
     * Relación uno a uno con la tabla `payment`.
     * Una cita puede tener un único pago asociado.
     */
    public function payment()
    {
        return $this->hasOne(Payment::class, 'appointmentId');
    }
}
