<?php

namespace App\Models\Photos;

use App\Models\City;
use Illuminate\Database\Eloquent\Model;

class PhotoCity extends Model
{
    protected $fillable = [
        'image',
        'caption',
        'city_id',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
