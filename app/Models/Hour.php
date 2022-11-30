<?php

namespace App\Models;

use App\Models\Day;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hour extends Model
{
    use HasFactory;

    public function days()
    {
        return $this->belongsToMany(Day::class);
    }
}
