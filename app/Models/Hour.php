<?php

namespace App\Models;

use App\Models\Day;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hour extends Model
{
    use HasFactory;

    public function specialists()
    {
        return $this->belongsToMany(Specialist::class);
    }

    public function day()
    {
        return $this->belongsTo(Day::class);
    }
}
