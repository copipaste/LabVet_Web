<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $table = 'doctor';

    protected $fillable = [
        'userId',
        'speciality',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'doctorId');
    }
}
