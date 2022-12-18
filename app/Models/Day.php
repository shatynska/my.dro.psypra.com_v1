<?php

namespace App\Models;

use App\Models\Hour;
use App\Models\Specialist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Day extends Model
{
    use HasFactory;

    public function hours()
    {
        return $this->hasMany(Hour::class);
    }
}

