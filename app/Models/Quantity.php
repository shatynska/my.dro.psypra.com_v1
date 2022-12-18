<?php

namespace App\Models;

use App\Models\Specialist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Quantity extends Model
{
    use HasFactory;

    public function specialists()
    {
        return $this->belongsToMany(Specialist::class);
    }
}

