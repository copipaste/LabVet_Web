<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payment';

    protected $fillable = [
        'appointmentId',
        'date',
        'amount',
        'method',
    ];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class, 'appointmentId');
    }
}
