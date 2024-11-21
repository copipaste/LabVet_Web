<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

    protected $table = 'promotion';

    // Campos que se pueden asignar de forma masiva
    protected $fillable = [
        'name',
        'description',
        'startDate',
        'endDate',
        'status',
        'discountPercentage',
    ];

    /**
     * Relación uno a muchos con Service.
     * Una promoción puede estar asociada a varios servicios.
     */
    public function services()
    {
        return $this->hasMany(Service::class, 'promotionId');
    }
}
