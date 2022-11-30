<?php

namespace App\Models;

use App\Models\Specialist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Certificate extends Model
{
    use HasFactory;

    public function specialist()
    {
        return $this->belongsTo(Specialist::class);
    }
}

