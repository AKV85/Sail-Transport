<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'manufacturer_id',
        'name',
    ];
    public $timestamps = true;

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }

    public function transports()
    {
        return $this->hasMany(Transport::class);
    }
}
