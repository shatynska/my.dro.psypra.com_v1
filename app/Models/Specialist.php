<?php

namespace App\Models;

use App\Models\Age;
use App\Models\Day;
use App\Models\Place;
use App\Models\Price;
use App\Models\Query;
use App\Models\Contact;
use App\Models\Duration;
use App\Models\Quantity;
use App\Models\Direction;
use App\Models\Specialty;
use App\Models\Certificate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Specialist extends Model
{
    use HasFactory;

    public function specialties()
    {
        return $this->belongsToMany(Specialty::class);
    }

    public function certificates()
    {
        return $this->hasMany(Certificate::class);
    }

    public function quantities()
    {
        return $this->belongsToMany(Quantity::class);
    }

    public function ages()
    {
        return $this->belongsToMany(Age::class);
    }

    public function queries()
    {
        return $this->belongsToMany(Query::class);
    }

    public function durations()
    {
        return $this->belongsToMany(Duration::class);
    }

    public function directions()
    {
        return $this->belongsToMany(Direction::class);
    }

    public function prices()
    {
        return $this->belongsToMany(Price::class);
    }
    
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    public function days()
    {
        return $this->belongsToMany(Day::class);
    }

    public function places()
    {
        return $this->belongsToMany(Place::class);
    }
}
