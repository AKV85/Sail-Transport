<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    use HasFactory;

    protected $fillable = [
        'model_id',
        'car_number',
        'fuel_tank_capacity(l)',
        'average_fuel_consumption(l/100km)',
        'projected_distance(km)',
    ];

    public function carModel()
    {
        return $this->belongsTo(CarModel::class, 'model_id');
    }
}
