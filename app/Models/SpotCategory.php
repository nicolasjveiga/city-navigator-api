<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpotCategory extends Model
{
    protected $table = 'spot_categories';

    protected $fillable = [
        'tourist_spot_id',
        'category_id'
    ];

    public function touristSpot()
    {
        return $this->belongsTo(TouristSpot::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
