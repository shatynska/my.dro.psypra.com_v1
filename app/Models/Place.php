<?php

namespace App\Models;

use App\Models\City;
use App\Models\Specialist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Place extends Model
{
    use HasFactory;

    public function specialists()
    {
        return $this->belongsToMany(Specialist::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}

