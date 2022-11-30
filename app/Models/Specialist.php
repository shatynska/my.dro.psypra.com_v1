<?php

namespace App\Models;

use App\Models\Specialty;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Specialist extends Model
{
    use HasFactory;

    public function specialties()
    {
        return $this->belongsToMany(Specialty::class);
    }
}
