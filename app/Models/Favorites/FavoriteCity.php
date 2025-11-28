<?php

namespace App\Models\Favorites;

use App\Models\User;
use App\Models\City;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FavoriteCity extends Model
{
    use SoftDeletes;

    protected $table = 'favorites_cities';

    protected $fillable = [
        'user_id',
        'city_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

}

