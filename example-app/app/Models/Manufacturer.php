<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Manufacturer extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name'];
    public $timestamps = true;

    public function carModels()
    {
        return $this->hasMany(CarModel::class);
    }
}
