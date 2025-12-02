<?php

namespace App\Models\Photos;

use App\Models\City;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PhotoCity extends Model
{
    use SoftDeletes;

    protected $table = 'photos_cities';

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
