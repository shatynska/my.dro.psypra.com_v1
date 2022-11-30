<?php

namespace App\Models;

use App\Models\Program;
use App\Models\Specialist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;

    public function specialist()
    {
        return $this->belongsTo(Specialist::class);
    }

    public function program() 
    {
        return $this->belongsTo(Program::class);
    }
}

