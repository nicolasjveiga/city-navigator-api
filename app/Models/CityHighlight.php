<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CityHighlight extends Model
{
    protected $table = 'city_highlights';

    protected $fillable = [
        'city_id',
        'key',
        'value'
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
