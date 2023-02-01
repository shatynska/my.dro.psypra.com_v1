<?php

namespace App\Models;

use App\Models\Program;
use App\Models\Specialist;
use App\Models\ContactType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'type',
        'specialist_id',
        'program_id',
    ];

    public function specialist()
    {
        return $this->belongsTo(Specialist::class);
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function contactTypes()
    {
        return $this->hasMany(ContactType::class);
    }
}
