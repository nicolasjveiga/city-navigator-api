<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisitedSpot extends Model
{
    protected $fillable = [
        'user_id',
        'tourist_spot_id',
        'visited_at',
        'note',
        'photo_url'
    ];

    protected $casts = [
        'visited_at' => 'datetime'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function touristSpot()
    {
        return $this->belongsTo(TouristSpot::class);
    }
}
