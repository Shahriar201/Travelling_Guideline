<?php

namespace App;
use App\Region;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = ['name', 'description', 'image', 'location', 'region_id'];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
