<?php

namespace App\Models\Contacts;

use App\Models\Contacts\Program;
use App\Models\Specialist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OnlineContact extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'specialist_id',
        'program_id',
        'order'
    ];

    public function specialist()
    {
        return $this->belongsTo(Specialist::class);
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}
