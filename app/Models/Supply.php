<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supply extends Model
{
    use HasFactory;

    protected $table = 'supply';

    protected $fillable = [
        'categoryId',
        'name',
        'description',
        'price',
        'stock',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'categoryId');
    }

    public function services()
    {
        return $this->belongsToMany(Service::class, 'service_supply', 'supplyId', 'serviceId')
                    ->withPivot('quantity', 'unit');
    }
}
