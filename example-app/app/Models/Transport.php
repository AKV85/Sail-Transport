<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;


class Transport extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'car_model_id',
        'car_number',
        'fuel_tank_capacity',
        'average_fuel_consumption',
    ];

    public function carModel()
    {
        return $this->belongsTo(CarModel::class, 'car_model_id');
    }

    public function scopeFilterByNumber(Builder $query, $searchCarNumber)
    {
        return $query->where('car_number', 'like', '%' . $searchCarNumber . '%');
    }

    public function scopeFilterByModelName(Builder $query, $searchModelName)
    {
        return $query->whereHas('carModel', function ($q) use ($searchModelName) {
            $q->where('name', 'like', '%' . $searchModelName . '%');
        });
    }

    public function scopeFilterByManufacturerName(Builder $query, $searchManufacturerName)
    {
        return $query->whereHas('carModel.manufacturer', function ($q) use ($searchManufacturerName) {
            $q->where('name', 'like', '%' . $searchManufacturerName . '%');
        });
    }

    public function scopeOnlyTrashedModels(Builder $query)
    {
        return $query->onlyTrashed()->whereHas('carModel');
    }
}
