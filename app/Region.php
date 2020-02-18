<?php

namespace App;
use App\Place;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = ['name', 'description', 'image'];

    public function place()
    {
        return $this-> hasMany(Place::class);
    }
}
